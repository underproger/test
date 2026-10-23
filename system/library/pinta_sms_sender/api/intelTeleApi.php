<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class IntelTeleAPI
{
    public static function sendSingle($username, $apiKey, $from, $to, $message, $callback = NULL)
    {
        $url = 'http://api.sms.intel-tele.com/message/send/';

        $json = array(
            'username' => $username,
            'api_key' => $apiKey,
            'to' => PintaSmsSender::phoneFormat($to),
            'text' => $message,
            'from' => $from,
            'priority' => 1 // 3 - max
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
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
            IntelTeleAPI::sendSingle($data['username'], $data['apikey'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
    }
}
