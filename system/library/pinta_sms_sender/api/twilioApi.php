<?php

namespace pinta_sms_sender\api;

class TwilioAPI
{

    public static function getAPIUrl($account_sid)
    {
        return "https://api.twilio.com/2010-04-01/Accounts/" . $account_sid . "/Messages.json";
    }

    public static function sendSingle($account_sid, $auth_token, $sender_phone, $to, $message, $callback = NULL)
    {
        $post_fields = [
            'Body' => $message,
            'To' => $to,
            'From' => $sender_phone
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, TwilioAPI::getAPIUrl($account_sid));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $account_sid . ':' . $auth_token);
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
        TwilioAPI::sendSingle($data['accountsid'], $data['authtoken'], $data['senderphone'], $data['to'], $data['message'], $data['callback']);
        return true;
    }
}
