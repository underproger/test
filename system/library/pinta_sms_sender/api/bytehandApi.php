<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class BytehandAPI
{
    public static function sendSingle($apiKey, $from, $to, $message, $callback = NULL)
    {
        $url = 'https://api.bytehand.com/v2/sms/messages';
        $headers = [
            'Content-Type: application/json;charset=UTF-8',
            "X-Service-Key: $apiKey"
        ];

        $json = array(
            'receiver' => PintaSmsSender::phoneFormat($to),
            'text' => $message,
            'sender' => $from
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);

        if (is_callable($callback)) {
            $callbackResult = [];
            $callbackResult['message'] = $response;
            $result = json_decode($response, true);
            $callbackResult['status'] = (!empty($result['result']) && $result['result'] == 'created') ?
                'success' : 'error';

            call_user_func($callback, $callbackResult);
        }
    }

    public static function sendMessage($data)
    {
        if (!is_array($data['to'])) {
            BytehandAPI::sendSingle($data['apikey'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
    }
}
