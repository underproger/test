<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class TurboSmsAPI {

	public static function getAPIUrl() {
		return "https://api.turbosms.ua/message/send.json";
	}

	public static function sendSingle($token, $from, $to, $message, $callback = NULL) {
        //        $json = array(
//            'sender' => $from,
//            'text' => $message,
//            'recipients' => [PintaSmsSender::phoneFormat($to)],
//        );
        $json = array(
            'recipients' => [PintaSmsSender::phoneFormat($to)],
            "sms" => [
                "sender" => $from,
                "text" => $message
            ]
        );
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, TurboSmsAPI::getAPIUrl());
        curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Basic " . $token
        ));
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);
		curl_close($ch);



		if (is_callable($callback)) {
		    $callbackResult = [];
            $callbackResult['message'] = $result;
            $result = json_decode($result);
            $callbackResult['status'] = ($result->response_status == 'OK') ? 'success' : 'error';

			call_user_func($callback, $callbackResult);
		}
	}

	public static function sendMessage($data) {
        if (!is_array($data['to'])) {
            TurboSmsAPI::sendSingle($data['token'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
	}
}
