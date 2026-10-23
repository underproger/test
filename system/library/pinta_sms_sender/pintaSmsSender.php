<?php

namespace pinta_sms_sender;

class PintaSmsSender
{
    private static $configs = [
        ['Id' => 'clickatell_api', 'Name' => 'Clickatell', 'ClassName' => 'ClickatellAPI',
            'SmsSize' => 70, 'SmsSizeUnicode' => 70, 'Requirements' => ['APIKey']],
        ['Id' => 'gateway_api', 'Name' => 'GatewayAPI', 'ClassName' => 'GatewayAPI',
            'SmsSize' => 140, 'SmsSizeUnicode' => 70, 'Requirements' => ['Token', 'Sender']],
        ['Id' => 'bulk_gate_api', 'Name' => 'BulkGate', 'ClassName' => 'BulkGateAPI',
            'SmsSize' => 612, 'SmsSizeUnicode' => 268, 'Requirements' => ['AppId', 'Token', 'Sender']],
        ['Id' => 'turbo_sms', 'Name' => 'TurboSms', 'ClassName' => 'TurboSmsAPI',
            'SmsSize' => 1521, 'SmsSizeUnicode' => 661, 'Requirements' => ['Token', 'Sender']],
        ['Id' => 'sms_ru', 'Name' => 'SmsRu', 'ClassName' => 'SmsRuAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['ApiId', 'Sender']],
        ['Id' => 'e_pochta', 'Name' => 'EPochta', 'ClassName' => 'EPochtaAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['PublicKey', 'PrivateKey', 'Sender']],
        ['Id' => 'red_sms', 'Name' => 'RedSms', 'ClassName' => 'RedSmsAPI',
            'SmsSize' => 140, 'SmsSizeUnicode' => 70, 'Requirements' => ['Login', 'APIKey', 'Sender']],
        ['Id' => 'bytehand', 'Name' => 'Bytehand', 'ClassName' => 'BytehandAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['APIKey', 'Sender']],
        ['Id' => 'intel_tele', 'Name' => 'IntelTele', 'ClassName' => 'IntelTeleAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['Username', 'APIKey', 'Sender']],
        ['Id' => 'digital_direct', 'Name' => 'DigitalDirect', 'ClassName' => 'DigitalDirectAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['APIKey', 'Sender']],
        ['Id' => 'twilio', 'Name' => 'Twilio', 'ClassName' => 'TwilioAPI',
            'SmsSize' => 160, 'SmsSizeUnicode' => 70, 'Requirements' => ['AccountSID', 'AuthToken', 'SenderPhone']]
    ];

    public static function getApiConfigs() {
        return PintaSmsSender::$configs;
    }

    public static function getApiPaths() {
        return [
            __NAMESPACE__ . '/api/clickatellApi',
            __NAMESPACE__ . '/api/gatewayApi',
            __NAMESPACE__ . '/api/bulkGateApi',
            __NAMESPACE__ . '/api/turboSmsApi',
            __NAMESPACE__ . '/api/smsRuApi',
            __NAMESPACE__ . '/api/ePochtaApi',
            __NAMESPACE__ . '/api/redSmsApi',
            __NAMESPACE__ . '/api/bytehandApi',
            __NAMESPACE__ . '/api/intelTeleApi',
            __NAMESPACE__ . '/api/digitalDirectApi',
            __NAMESPACE__ . '/api/twilioApi'
        ];
    }

    public static function getApiConfigById($id) {
        foreach (PintaSmsSender::$configs as $config) {
            if ($config['Id'] == $id) {
                return $config;
            }
        }
        return null;
    }

    public static function getApiRequirementsById($id) {
        foreach (PintaSmsSender::$configs as $config) {
            if ($config['Id'] == $id) {
                return $config['Requirements'];
            }
        }
        return null;
    }

    public static function phoneFormat($phone) {
        if ($phone[0] == '+') {
            $phone = substr($phone, 1);
        }

        return $phone;
    }

    public static function phoneToInt($phone) {
        return (int) PintaSmsSender::phoneFormat($phone);
    }

    public static function createMessageData($data, $to, $message, $unicode, $callback) {
        $result = array(
            'to' => $to,
            'message' => $message,
            'unicode' => ($unicode == 'true'),
            'callback' => $callback
        );

        $requirements = PintaSmsSender::getApiRequirementsById($data['Api']['Id']);
        foreach ($requirements as $requirement) {
            $result[strtolower($requirement)] = $data[$requirement];
        }

        return $result;
    }

    public static function sendMessage($apiClassName, $params)
    {
        call_user_func_array(array(__NAMESPACE__ . '\\api\\' . $apiClassName, 'sendMessage'), [$params]);
    }
}