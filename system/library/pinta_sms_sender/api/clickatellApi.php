<?php

namespace pinta_sms_sender\api;

class ClickatellAPI
{

    public static function getAPIUrl()
    {
        return "https://platform.clickatell.com/messages";
    }

    public static function sendSingle($api_key, $to, $message, $callback = NULL)
    {
        $json = array(
            'content' => $message,
            'to' => [$to]
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, ClickatellAPI::getAPIUrl());
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: ' . $api_key
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        if (is_callable($callback)) {
            $callbackResult = [];
            $callbackResult['message'] = $result;
            $result = json_decode($result);
            $callbackResult['status'] = !isset($result->error) ? 'success' : 'error';

            call_user_func($callback, $callbackResult);
        }
    }

    public static function sendMessage($data)
    {
        ClickatellAPI::sendSingle($data['apikey'], $data['to'], $data['message'], $data['callback']);
        return true;
    }
}
