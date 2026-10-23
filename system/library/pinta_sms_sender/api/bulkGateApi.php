<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class BulkGateAPI {

	public static function getAPIUrl() {
		return "https://portal.bulkgate.com/api/1.0/simple/transactional";
	}

	public static function sendSingle($appId, $token, $from, $to, $message, $unicode = false, $callback = NULL) {
		$json = array(
            'application_id' => $appId,
            'application_token' => $token,
            'number' => $to,
            'text' => $message,
            'sender_id' => 'gText',
            'sender_id_value' => $from,
            'unicode' => $unicode
        );

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, BulkGateAPI::getAPIUrl());
        curl_setopt($ch,CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

        curl_setopt($ch,CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch,CURLOPT_TIMEOUT, 30);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);
		curl_close($ch);

		if (is_callable($callback)) {
		    $callbackResult = [];
            $callbackResult['message'] = $result;
            $result = json_decode($result);
            $callbackResult['status'] = isset($result->data) ? 'success' : 'error';

			call_user_func($callback, $callbackResult);
		}
	}

	public static function sendMessage($data) {
        if (!is_array($data['to'])) {
            BulkGateAPI::sendSingle($data['appid'], $data['token'], $data['sender'],
                $data['to'], $data['message'], $data['unicode'], $data['callback']);
        }

        return true;
	}
}
