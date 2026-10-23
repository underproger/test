<?php

use pinta_sms_sender\PintaSmsSender;

class ModelExtensionModulePintaSmsSender extends Model
{
    public function getSetting($group, $store_id)
    {
        $data = array();
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $this->db->escape($group) . "'");

        foreach ($query->rows as $result) {
            $data[$result['key']] = !$result['serialized'] ? $result['value'] : unserialize($result['value']);
        }

        return $data;
    }

    public static function PintaSmsSenderCallback($response)
    {
        $log = new Log('pinta_sms_sender_callback_log.txt');

        if ($response['status'] == 'error') {
            $log->write('ERROR: ' . $response['message']);
        } else {
            $log->write($response['message']);
        }
    }

    public function loadApiLibraries() {
        $this->load->library('pinta_sms_sender/pintaSmsSender');
        $apiPaths = PintaSmsSender::getApiPaths();
        foreach ($apiPaths as $path) {
            $this->load->library($path);
        }
    }

    public function getAddressString($orderInfo, $isPaymentAddress) {
        $address = $isPaymentAddress ? 'payment' : 'shipping';

        if ($orderInfo["{$address}_address_format"]) {
            $format = $orderInfo["{$address}_address_format"];
        } else {
            $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" .
                '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}'
        );

        $replace = array(
            'firstname' => $orderInfo["{$address}_firstname"],
            'lastname' => $orderInfo["{$address}_lastname"],
            'company' => $orderInfo["{$address}_company"],
            'address_1' => $orderInfo["{$address}_address_1"],
            'address_2' => $orderInfo["{$address}_address_2"],
            'city' => $orderInfo["{$address}_city"],
            'postcode' => $orderInfo["{$address}_postcode"],
            'zone' => $orderInfo["{$address}_zone"],
            'zone_code' => $orderInfo["{$address}_zone_code"],
            'country' => $orderInfo["{$address}_country"]
        );

        return str_replace($find, $replace, $format);
    }

    public function getLastOrderStatuses($order_id, $language_id)
    {
        $order_statuses = array();
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int)$order_id . "' ORDER BY `order_history_id` DESC LIMIT 0, 2");

        foreach ($query->rows as $result) {
            $order_statuses[] = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$result['order_status_id'] . "' AND `language_id` = '" . (int)$language_id . "'")->row;
        }

        return $order_statuses;
    }

    public function sendCheck($number = '')
    {
        $this->load->model('setting/setting');
        $PintaSmsSender = $this->model_setting_setting->getSetting('PintaSmsSender', $this->config->get('config_store_id'));

        $number = str_replace(' ', '', $number);
        $number = str_replace('-', '', $number);
        $number = str_replace('(', '', $number);
        $number = str_replace(')', '', $number);

        $phoneNumberPrefix = $PintaSmsSender['PintaSmsSender']['NumberPrefix'];
        if (isset($phoneNumberPrefix) && !empty($phoneNumberPrefix) && ($phoneNumberPrefix == 'yes')) {
            $prefix = $phoneNumberPrefix;

            $numberCheck = ltrim($number, '+');
            $numberCheck = ltrim($numberCheck, '0');
            $prefixCheck = ltrim($prefix, '+');

            $formattedNumber = false;

            if (is_numeric($number)) {
                if ((strpos($number, '+') === 0 || strpos($number, '00') === 0) && strpos($numberCheck, $prefixCheck) === 0) {
                    $formattedNumber = '+' . $numberCheck;
                } else if ((strpos($number, '+') === 0 || strpos($number, '00') === 0) && strpos($numberCheck, $prefixCheck) !== 0) {
                    $formattedNumber = false;
                } else if (strpos($numberCheck, $prefixCheck) !== 0) {
                    $formattedNumber = $prefix . $numberCheck;
                } else if ((strpos($number, '+') !== 0) && (strpos($number, '00') !== 0) && strpos($numberCheck, $prefixCheck) === 0) {
                    $formattedNumber = '+' . $number;
                } else {
                    $formattedNumber = false;
                }
            }
            return $formattedNumber;
        }
        return $number;
    }

    public function countOrderHistory($order_id) {
        return $this->db->query("SELECT count(*) as counter FROM " . DB_PREFIX ."order_history WHERE order_id = ". (int)$order_id);
    }

    public function getCustomerDataById($customer_id) {
        return $this->db->query("SELECT firstname, lastname, telephone FROM `" . DB_PREFIX ."customer` WHERE customer_id = ".(int)$customer_id);
    }
}
