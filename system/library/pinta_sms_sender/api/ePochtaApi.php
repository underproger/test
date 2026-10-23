<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class EPochtaAPI
{
    private static function processResponseJSON($result)
    {
        if ($result) {
            $jsonObj = json_decode($result, true);
            if (null === $jsonObj) {
                return array('status' => 'error', 'message' => NULL);
            } elseif (!empty($jsonObj->error)) {
                return array('status' => 'error', 'message' => $jsonObj->error);
            } else {
                return array('status' => 'success', 'message' => $jsonObj);
            }
        } else {
            return array('status' => 'error', 'message' => NULL);
        }
    }

    private static function calcControlSum($params, $version, $action, $privateKey)
    {
        $params['version'] = $version;
        $params['action'] = $action;
        ksort($params);
        $sum = '';
        foreach ($params as $k => $v) {
            $sum .= $v;
        }
        $sum .= $privateKey;

        return md5($sum);
    }

    public static function sendSingle($publicKey, $privateKey, $from, $to, $message, $callback = NULL)
    {
        $url = 'http://atompark.com/api/sms/';
        $version = '3.0';
        $command = 'sendSMS';
        $testMode = false;

        $params = array(
            'sender' => $from,
            'text' => $message,
            'phone' => PintaSmsSender::phoneFormat($to),
            "datetime" => "",
            "sms_lifetime" => 0,
            "type" => null,
            "key" => "$publicKey"
        );

        if ($testMode) {
            $params['test'] = $testMode;
        }

        $controlSUM = EPochtaAPI::calcControlSum($params, $version, $command, $privateKey);
        $params['sum'] = $controlSUM;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_URL, $url . $version . '/' . $command);
        $result = curl_exec($ch);
        $errors = curl_errno($ch);
        curl_close($ch);

        if (is_callable($callback)) {
            if ($errors > 0) {
                $callbackResult = array('status' => 'error', 'message' => curl_errno($ch));
            } else {
                $callbackResult = EPochtaAPI::processResponseJSON($result);
            }

            call_user_func($callback, $callbackResult);
        }
    }

    public static function sendMessage($data)
    {
        if (!is_array($data['to'])) {
            EPochtaAPI::sendSingle($data['publickey'], $data['privatekey'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
    }
}
