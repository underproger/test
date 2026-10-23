<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class RedSmsAPI
{
    private static function getHeaders($login, $apiKey, $data = [])
    {
        ksort($data);
        reset($data);
        $ts = microtime() . rand(0, 10000);

        return [
            'login: ' . $login,
            'ts: ' . $ts,
            'sig: ' . md5(implode('', $data) . $ts . $apiKey),
        ];
    }

    public static function sendSingle($login, $apiKey, $from, $to, $message, $callback = NULL)
    {
        $url = 'https://cp.redsms.ru/api';
        $route = 'sms';
        $methodUrl = 'message';

        $json = array(
            'to' => implode(',', [PintaSmsSender::phoneFormat($to)]),
            'text' => $message,
            'from' => $from,
            'route' => $route
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url . "/" . $methodUrl);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        curl_setopt($curl, CURLOPT_HTTPHEADER, RedSmsAPI::getHeaders($login, $apiKey, $json));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);

        if (is_callable($callback)) {
            $callbackResult = [];
            $callbackResult['message'] = $response;
            $callbackResult['status'] = (json_last_error() != JSON_ERROR_NONE || $info['http_code'] != 200) ?
                'error' : 'success';

            call_user_func($callback, $callbackResult);
        }
    }

    public static function sendMessage($data)
    {
        if (!is_array($data['to'])) {
            RedSmsAPI::sendSingle($data['login'], $data['apikey'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
    }
}
