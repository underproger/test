<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class DigitalDirectAPI
{
    public static function sendSingle($apiKey, $from, $to, $message, $callback = NULL)
    {
        $url = 'https://direct.i-dgtl.ru/api/v1/message';
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ];
        $json = [[
            'channelType' => 'SMS',
            'destination' => PintaSmsSender::phoneFormat($to),
            'content' => $message,
            'senderName' => $from
        ]];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($curl, CURLOPT_TIMEOUT, 70);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);

        if (is_callable($callback)) {
            $callbackResult = [];
            $callbackResult['message'] = $response;
            $result = json_decode($response, true);
            $callbackResult['status'] = (!empty($result['reply']['status']) && $result['reply']['status'] == 'OK') ?
                'success' : 'error';

            call_user_func($callback, $callbackResult);
        }
    }

    public static function sendMessage($data)
    {
        if (!is_array($data['to'])) {
            DigitalDirectAPI::sendSingle($data['apikey'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
    }
}
