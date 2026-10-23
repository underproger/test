<?php

namespace pinta_sms_sender\api;

use pinta_sms_sender\PintaSmsSender;

class GatewayAPI {

	public static function getAPIUrl() {
		return "https://gatewayapi.com/rest/mtsms";
	}

	public static function sendSingle($token, $from, $to, $message, $unicode = false, $callback = NULL) {
        $recipients = [PintaSmsSender::phoneToInt($to)];
		$json = array(
			'sender' => $from,
            'message' => $message,
			'recipients' => [],
        );
        foreach ($recipients as $msisdn) {
            $json['recipients'][] = ['msisdn' => $msisdn];
        }

        if ($unicode) {
            $json['encoding'] = 'UCS2';
        }

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, GatewayAPI::getAPIUrl());
        curl_setopt($ch,CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch,CURLOPT_USERPWD, $token . ":");
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);
		curl_close($ch);

		if (is_callable($callback)) {
		    $callbackResult = [];
            $callbackResult['message'] = $result;
            $result = json_decode($result);
            $callbackResult['status'] = isset($result->ids) ? 'success' : 'error';

			call_user_func($callback, $callbackResult);
		}
	}

	public static function sendMessage($data) {
        if (!is_array($data['to'])) {
            GatewayAPI::sendSingle($data['token'], $data['sender'], $data['to'],
                $data['message'], $data['unicode'], $data['callback']);
        }

        return true;
	}
}
