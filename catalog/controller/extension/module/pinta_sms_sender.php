<?php

use pinta_sms_sender\PintaSmsSender;

class ControllerExtensionModulePintaSmsSender extends Controller {
    private $call_model = 'model_module_pinta_sms_sender';
    private $module_path = 'module/pinta_sms_sender';
    private $model_class = 'ModelModulePintaSmsSender';
    private $pinta_sms_sender_model;

    public function __construct($registry){
        parent::__construct($registry);

        if (version_compare(VERSION, '2.3.0.0', '>=')) {
            $this->call_model = 'model_extension_module_pinta_sms_sender';
            $this->module_path = 'extension/module/pinta_sms_sender';
            $this->model_class = 'ModelExtensionModulePintaSmsSender';
        }

        $this->load->model($this->module_path);
        $this->load->model('setting/setting');

        $this->pinta_sms_sender_model = $this->{$this->call_model};
    }

    public function loadApiLibraries() {
        $this->load->library('pinta_sms_sender/pintaSmsSender');
        $apiPaths = PintaSmsSender::getApiPaths();
        foreach ($apiPaths as $path) {
            $this->load->library($path);
        }
    }

    public function onOrderChanged($route, $order_id) {
        $order_id = $order_id[0];

        if ($order_id != 0) {
            $this->load->model('checkout/order');
            $this->load->model('setting/setting');
            $order_info = $this->model_checkout_order->getOrder($order_id);
            $PintaSmsSender = $this->model_setting_setting->getSetting('PintaSmsSender', $order_info['store_id']);

            $orderHistory = $this->pinta_sms_sender_model->countOrderHistory($order_id);

            $this->loadApiLibraries();

            if ($orderHistory->row['counter'] <= 1) {
                // ON PLACE ORDER
                // Send SMS to the customer
                if (isset($PintaSmsSender) && !empty($PintaSmsSender) &&
                    ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
                    ($PintaSmsSender['PintaSmsSender']['CustomerPlaceOrder']['Enabled'] == 'yes')) {

                    $phone = !empty($order_info['telephone']) ? $order_info['telephone'] : '';
                    $payment_address = $this->pinta_sms_sender_model->getAddressString($order_info, true);
                    $shipping_address = $this->pinta_sms_sender_model->getAddressString($order_info, false);

                    $original = array(
                        "{OrderID}",
                        "{SiteName}",
                        "{CartTotal}",
                        "{ShippingAddress}",
                        "{ShippingMethod}",
                        "{PaymentAddress}",
                        "{PaymentMethod}"
                    );

                    $replace = array(
                        $order_id,
                        $this->config->get('config_name'),
                        $order_info['total'],
                        $shipping_address,
                        $order_info['shipping_method'],
                        $payment_address,
                        $order_info['payment_method']
                    );

                    $language = $this->config->get('config_language_id');
                    $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['CustomerPlaceOrderText'][$language]);
                    $sendCheck = $this->pinta_sms_sender_model->sendCheck($phone);
                    $callback = array($this->model_class, 'PintaSmsSenderCallback');
                    $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

                    if (!empty($phone) && $sendCheck) {
                        $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $sendCheck, $message, $unicode, $callback);
                        PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);

                        $this->session->data["pinta_sms_sender_lastorder"]['price'] = $order_info['total'];
                        $this->session->data["pinta_sms_sender_lastorder"]['time'] = date('m/d/Y h:i:s a', time());
                    }

                }

                // Send SMS to the admin
                if (isset($PintaSmsSender) && !empty($PintaSmsSender) &&
                    ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
                    ($PintaSmsSender['PintaSmsSender']['AdminPlaceOrder']['Enabled'] == 'yes')) {

                    if ($order_info['order_status_id'] != 0) {
                        $original = array("{OrderID}", "{SiteName}", "{CartTotal}");
                        $replace = array($order_id, $this->config->get('config_name'), $order_info['total']);

                        $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['AdminPlaceOrderText']);
                        $adminNumbers = isset($PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber']) ? $PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber'] : array();
                        $callback = array($this->model_class, 'PintaSmsSenderCallback');
                        $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

                        foreach ($adminNumbers as $phone) {
                            if (!empty($phone)) {
                                $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $phone, $message, $unicode, $callback);
                                PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
                            }
                        }
                    }
                }

            } else {
                // ON ORDER STATUS CHANGED
                // Send SMS to the customer
                if (isset($PintaSmsSender) && !empty($PintaSmsSender) &&
                    ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
                    ($PintaSmsSender['PintaSmsSender']['OrderStatusChange']['Enabled'] == 'yes')) {

                    if ($order_info['order_status_id'] &&
                        (!empty($PintaSmsSender['PintaSmsSender']['OrderStatusChange']['OrderStatus']) &&
                            (in_array($order_info['order_status_id'], $PintaSmsSender['PintaSmsSender']['OrderStatusChange']['OrderStatus'])))) {
                        $Status = isset($order_info['order_status']) ? $order_info['order_status'] : '';

                        $language = $order_info['language_id'];
                        $last_order_status = $this->pinta_sms_sender_model->getLastOrderStatuses($order_id, $language);

                        $Status1 = !empty($last_order_status[1]['name']) ? $last_order_status[1]['name'] : '';
                        $Status2 = $Status;
                        $original = array("{SiteName}", "{OrderID}", "{Status}", "{Status1}", "{Status2}", "{StatusFrom}", "{StatusTo}");
                        $replace = array($this->config->get('config_name'), $order_id, $Status, $Status1, $Status2, $Status1, $Status2);

                        $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['OrderStatusChangeText'][$language]);
                        $phone = $order_info['telephone'];
                        $sendCheck = $this->pinta_sms_sender_model->sendCheck($phone);
                        $callback = array($this->model_class, 'PintaSmsSenderCallback');
                        $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

                        if ($sendCheck) {
                            $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $sendCheck, $message, $unicode, $callback);
                            PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
                        }
                    }
                }
            }
        }
    }

    public function onRegister() {
        if (func_num_args() > 1) {
            $temp_id = !is_array(func_get_arg(1)) ? func_get_arg(1) : func_get_arg(2);
        } else {
            $temp_id = func_get_arg(0);
        }
        $customer_id = $temp_id;

        $this->load->model('setting/setting');
        $PintaSmsSender = $this->model_setting_setting->getSetting('PintaSmsSender', $this->config->get('store_id'));

        $this->loadApiLibraries();

        //Send SMS to the admin when new user is registered
        if(isset($PintaSmsSender) && !empty($PintaSmsSender) &&
            ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
            ($PintaSmsSender['PintaSmsSender']['AdminRegister']['Enabled'] == 'yes')) {
            $customer = $this->pinta_sms_sender_model->getCustomerDataById($customer_id);

            $nameCustomer = $customer->row ? "{$customer->row['firstname']} {$customer->row['lastname']}" : '';
            $original = array("{SiteName}","{CustomerName}");
            $replace = array($this->config->get('config_name'), $nameCustomer);
            $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['AdminRegisterText']);
            $adminNumbers = isset($PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber']) ? $PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber'] : array();
            $callback = array($this->model_class, 'PintaSmsSenderCallback');
            $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

            foreach($adminNumbers as $phone) {
                if (!empty($phone)) {
                    $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $phone, $message, $unicode, $callback);
                    PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
                }
            }
        }

        //Send SMS to the user when the registration is successful
        if(isset($PintaSmsSender) && !empty($PintaSmsSender) &&
            ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
            ($PintaSmsSender['PintaSmsSender']['CustomerRegister']['Enabled'] == 'yes')) {
            $customer = $this->pinta_sms_sender_model->getCustomerDataById($customer_id);

            if ($customer->row) {
                $phone = $customer->row['telephone'];
                $nameCustomer = "{$customer->row['firstname']} {$customer->row['lastname']}";
            } else {
                $phone = '';
                $nameCustomer = '';
            }

            $language = $this->config->get('config_language_id');
            $original = array("{StoreName}","{CustomerName}");
            $replace = array($this->config->get('config_name'), $nameCustomer);

            $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['CustomerRegisterText'][$language]);
            $sendCheck = $this->pinta_sms_sender_model->sendCheck($phone);
            $callback = array($this->model_class, 'PintaSmsSenderCallback');
            $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

            if ($sendCheck) {
                $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $sendCheck, $message, $unicode, $callback);
                PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
            }
        }
    }

    public function onQuickOrder($route, $fields, $lastId) {
        $fields = isset($fields[0]) ? $fields[0] : $fields;

        $this->load->model('setting/setting');
        $PintaSmsSender = $this->model_setting_setting->getSetting('PintaSmsSender', $this->config->get('config_store_id'));

        $this->loadApiLibraries();

        // ON PLACE QUICK ORDER
        // Send SMS to the customer
        if (isset($PintaSmsSender) && !empty($PintaSmsSender) &&
            ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
            ($PintaSmsSender['PintaSmsSender']['CustomerQuickOrder']['Enabled'] == 'yes')) {

            $name = !empty($fields['name']) ? $fields['name'] : '';
            $email = !empty($fields['email']) ? $fields['email'] : '';
            $phone = !empty($fields['phone']) ? $fields['phone'] : '';
            $comment = !empty($fields['customer_comment']) ? $fields['customer_comment'] : '';

            $original = array(
                "{QuickOrderID}",
                "{SiteName}",
                "{ProductID}",
                "{ProductAmount}",
                "{ProductName}",
                "{Price}",
                "{PageUrl}",
                "{Name}",
                "{Email}",
                "{Phone}",
                "{Comment}",
            );

            $replace = array(
                $lastId,
                $this->config->get('config_name'),
                $fields['product_id'],
                $fields['product_amount'],
                $fields['product_name'],
                $fields['price'],
                $fields['page_url'],
                $name,
                $email,
                $phone,
                $comment
            );

            $language = $this->config->get('config_language_id');
            $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['CustomerQuickOrderText'][$language]);
            $sendCheck = $this->pinta_sms_sender_model->sendCheck($phone);
            $callback = array($this->model_class, 'PintaSmsSenderCallback');
            $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

            if (!empty($phone) && $sendCheck) {
                $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $sendCheck, $message, $unicode, $callback);
                PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
            }
        }

        // Send SMS to the admin
        if (isset($PintaSmsSender) && !empty($PintaSmsSender) &&
            ($PintaSmsSender['PintaSmsSender']['Enabled'] == 'yes') &&
            ($PintaSmsSender['PintaSmsSender']['AdminQuickOrder']['Enabled'] == 'yes')) {

            $name = !empty($fields['name']) ? $fields['name'] : '';
            $email = !empty($fields['email']) ? $fields['email'] : '';
            $phone = !empty($fields['phone']) ? $fields['phone'] : '';
            $comment = !empty($fields['customer_comment']) ? $fields['customer_comment'] : '';

            $original = array(
                "{QuickOrderID}",
                "{SiteName}",
                "{ProductID}",
                "{ProductAmount}",
                "{ProductName}",
                "{Price}",
                "{PageUrl}",
                "{Name}",
                "{Email}",
                "{Phone}",
                "{Comment}",
            );

            $replace = array(
                $lastId,
                $this->config->get('config_name'),
                $fields['product_id'],
                $fields['product_amount'],
                $fields['product_name'],
                $fields['price'],
                $fields['page_url'],
                $name,
                $email,
                $phone,
                $comment
            );

            $message = str_replace($original, $replace, $PintaSmsSender['PintaSmsSender']['AdminQuickOrderText']);
            $adminNumbers = isset($PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber']) ? $PintaSmsSender['PintaSmsSender']['StoreOwnerPhoneNumber'] : array();
            $callback = array($this->model_class, 'PintaSmsSenderCallback');
            $unicode = $PintaSmsSender['PintaSmsSender']['SmsUnicode'];

            foreach ($adminNumbers as $phone) {
                if (!empty($phone)) {
                    $data = PintaSmsSender::createMessageData($PintaSmsSender['PintaSmsSender'], $phone, $message, $unicode, $callback);
                    PintaSmsSender::sendMessage($PintaSmsSender['PintaSmsSender']['Api']['ClassName'], $data);
                }
            }

        }
    }


    private function log($text) {
        $log = new Log("pinta_sms_sender_error_log.txt");
        $log->write($text);
    }
}