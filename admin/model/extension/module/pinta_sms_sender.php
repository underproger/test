<?php

class ModelExtensionModulePintaSmsSender extends Model
{
    private $module_path = 'module/pinta_sms_sender';

    private function init()
    {
        if (version_compare(VERSION, '2.3.0.0', '>=')) {
            $this->module_path = 'extension/module/pinta_sms_sender';
        }
    }

    public function getSetting($group, $store_id = 0)
    {
        $this->init();
        $data = array();
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $this->db->escape($group) . "'");
        foreach ($query->rows as $result) {
            if (!$result['serialized']) {
                $data[$result['key']] = $result['value'];
            } else {
                $data[$result['key']] = unserialize($result['value']);
            }
        }
        return $data;
    }

    public function editSetting($group, $data, $store_id = 0)
    {
        $this->init();
        $this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $this->db->escape($group) . "'");
        foreach ($data as $key => $value) {
            if (!is_array($value)) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `group` = '" . $this->db->escape($group) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `group` = '" . $this->db->escape($group) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(serialize($value)) . "', serialized = '1'");
            }
        }
    }

    public static function PintaSmsSenderCallback($response)
    {
        global $log;

        if ($response['status'] == 'error') {
            $log->write('ADMIN - ERROR: ' . $response['message']);
        } else {
            $log->write('ADMIN - ' . $response['message']);
        }
    }

    public function sendCheck($number = '')
    {
        $this->init();
        $this->load->model('setting/setting');
        $PintaSmsSender = $this->model_setting_setting->getSetting('PintaSmsSender', $this->config->get('config_store_id'));

        $number = str_replace(' ', '', $number);
        $number = str_replace('-', '', $number);
        $number = str_replace('(', '', $number);
        $number = str_replace(')', '', $number);

        if (isset($PintaSmsSender['PintaSmsSender']['NumberPrefix']) &&
            !empty($PintaSmsSender['PintaSmsSender']['NumberPrefix']) &&
            ($PintaSmsSender['PintaSmsSender']['PhoneNumberPrefix'] == 'yes')) {
            $prefix = $PintaSmsSender['PintaSmsSender']['NumberPrefix'];

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

    public function getInstalledPluginByCode($code) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = 'module' AND `code` = '" . $this->db->escape($code) . "' LIMIT 1");
        return $query->num_rows;
    }

    public function addQuickOrderEvent() {
        $this->init();
        $this->load->model('setting/event');

        if (!$this->model_setting_event->getEventByCode("pinta_sms_sender_quick_order") && $this->getInstalledPluginByCode('quick_order')) {
            $this->model_setting_event->addEvent("pinta_sms_sender_quick_order", 'catalog/model/extension/module/quick_order/add/after', $this->module_path . '/onQuickOrder');
        }
    }

    public function install()
    {
        if (version_compare(VERSION, '2.2.0.0', ">=")) {
            $this->addQuickOrderEvent();
            $this->model_setting_event->addEvent("pinta_sms_sender", 'catalog/model/checkout/order/addOrderHistory/after', $this->module_path . '/onOrderChanged');
            $this->model_setting_event->addEvent("pinta_sms_sender", 'catalog/model/account/customer/addCustomer/after', $this->module_path . '/onRegister');
        }
    }

    public function uninstall()
    {
        $this->load->model('setting/setting');
        $this->load->model('setting/store');
        $this->model_setting_setting->deleteSetting('PintaSmsSender', 0);

        $stores = $this->model_setting_store->getStores();
        foreach ($stores as $store) {
            $this->model_setting_setting->deleteSetting('PintaSmsSender', $store['store_id']);
        }

        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('pinta_sms_sender');
        $this->model_setting_event->deleteEventByCode('pinta_sms_sender_quick_order');
    }
}
