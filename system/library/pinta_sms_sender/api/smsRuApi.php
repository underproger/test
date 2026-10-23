<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class SmsRuAPI {

	public static function getAPIUrl() {
		return "https://sms.ru/sms/send";
	}

	public static function sendSingle($apiId, $from, $to, $message, $callback = NULL) {
        $json = array(
            "api_id" => $apiId,
            'from' => $from,
            'msg' => $message,
            'to' => PintaSmsSender::phoneFormat($to),
            'json' => '1'
        );

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, SmsRuAPI::getAPIUrl());
        curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($json));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);
		curl_close($ch);

		if (is_callable($callback)) {
		    $callbackResult = [];
            $callbackResult['message'] = $result;
            $result = json_decode($result);
            $callbackResult['status'] = ($result->status == 'OK') ? 'success' : 'error';
			call_user_func($callback, $callbackResult);
		}
	}

	public static function sendMessage($data) {
        if (!is_array($data['to'])) {
            SmsRuAPI::sendSingle($data['apiid'], $data['sender'],
                $data['to'], $data['message'], $data['callback']);
        }

        return true;
	}
}
