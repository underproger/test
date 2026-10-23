<?php

use pinta_sms_sender\PintaSmsSender;

class ControllerExtensionModulePintaSmsSender extends Controller
{

    /**
     * @property   String $module_path String containing the path expression for PintaSmsSender files.
     * @property   String $call_model String containing the call to PintaSmsSender model.
     * @property   String $user_token String containing name of key 'user_token' for different versions.
     * @property   ModelExtensisionModulePintaSmsSender $pinta_sms_sender_model Object containing the loaded PintaSmsSender model.
     */
    private $data = array();
    private $call_model = 'model_module_pinta_sms_sender';
    private $module_path = 'module/pinta_sms_sender';
    private $user_token = 'token';
    private $pinta_sms_sender_model;

    public function __construct($registry)
    {
        parent::__construct($registry);
        if (version_compare(VERSION, '2.3.0.0', '>=')) {
            $this->call_model = 'model_extension_module_pinta_sms_sender';
            $this->module_path = 'extension/module/pinta_sms_sender';
            $this->model_class = 'ModelExtensionModulePintaSmsSender';
            $this->user_token = 'user_token';
        }
        $this->load->model($this->module_path);
        $this->pinta_sms_sender_model = $this->{$this->call_model};
        $this->load->language($this->module_path);

        $this->load->model('setting/store');
        $this->load->model('localisation/language');
        $this->load->model('setting/setting');

        $this->document->addStyle('view/stylesheet/pinta_sms_sender/pinta_sms_sender.css');
        $this->document->addStyle('view/stylesheet/pinta_sms_sender/select2.css');
        $this->document->addScript('view/javascript/pinta_sms_sender/select2.min.js');

        $this->data['module_path'] = $this->module_path;
        $this->data['catalogURL'] = $this->getCatalogURL();
    }

    public function index()
    {
        if (!isset($this->request->get['store_id'])) {
            $this->request->get['store_id'] = 0;
        }
        $this->document->setTitle($this->language->get('heading_text'));
        $store = $this->getCurrentStore($this->request->get['store_id']);

        $this->load->library('pinta_sms_sender/pintaSmsSender');

        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $this->saveChanges();
            $this->response->redirect($this->url->link($this->module_path, "{$this->user_token}=" . $this->session->data[$this->user_token] . '&store_id=' . $store['store_id'], 'SSL'));
        }

        if (isset($this->session->data['success'])) {
            $this->data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $this->data['success'] = '';
        }

        if (isset($this->session->data['error'])) {
            $this->data['error_warning'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else {
            $this->data['error_warning'] = '';
        }

        $this->data['api_list'] = PintaSmsSender::getApiConfigs();

        $this->pinta_sms_sender_model->addQuickOrderEvent();
        $this->data['quick_order_exists'] = $this->pinta_sms_sender_model->getInstalledPluginByCode('quick_order');
        $this->data['buy_quick_order_link'] = "https://shop.pinta.pro/quick-order-form-en/quick-order-form-easy-buy-in-one-click-for-opencart-v-1-5-3-x-en";

        $this->load->model('localisation/order_status');
        $this->data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        $homePath = 'common/dashboard';
        $extensionsPath = 'extension/extension';

        if (version_compare(VERSION, '3.0.0.0', '>=')) {
            $extensionsPath = 'marketplace/extension';
        } else if (version_compare(VERSION, '2.3.0.0', '<') and
            version_compare(VERSION, '2.0.0.0', '>=')) {
            $extensionsPath = 'extension/module';
        } else if (version_compare(VERSION, '2.0.0.0', '<')) {
            $homePath = 'common/home';
            $extensionsPath = 'extension/module';
        }

        $this->data['breadcrumbs'] = $this->getBreadcrumbs($homePath, $extensionsPath);

        $this->data += $this->load->language($this->module_path);
        $this->data['stores'] = array_merge(array(0 => array('store_id' => '0', 'name' => $this->config->get('config_name') . ' ' . $this->data['text_default'], 'url' => HTTP_SERVER, 'ssl' => HTTPS_SERVER)), $this->model_setting_store->getStores());

        $languages = $this->model_localisation_language->getLanguages();
        foreach ($languages as $key => $language) {
            if ($language['status'] == 0) {
                continue;
            }
            $this->data['languages'][$key]['flag_url'] = 'language/' . $languages[$key]['code'] . '/' . $languages[$key]['code'] . '.png"';
            $this->data['languages'][$key]['language_id'] = $language['language_id'];
            $this->data['languages'][$key]['name'] = $language['name'];
        }
        $this->data['store'] = $store;
        $this->data['user_token'] = $this->session->data[$this->user_token];
        $this->data['action'] = $this->url->link($this->module_path, "{$this->user_token}=" . $this->session->data[$this->user_token], 'SSL');
        $this->data['cancel'] = $this->url->link($extensionsPath, "{$this->user_token}=" . $this->session->data[$this->user_token] . '&type=module', 'SSL');

        $this->data['sms_size'] = 70;
        $this->data['selected_country'] = 'ua';

        $this->data['data'] = $this->model_setting_setting->getSetting('PintaSmsSender', $store['store_id']);
        if (isset($this->data['data']['PintaSmsSender']) && !empty($this->data['data']['PintaSmsSender'])) {
            $PintaSmsSender = $this->data['data']['PintaSmsSender'];

            if (!empty($PintaSmsSender['CountryCode'])) {
                $this->data['selected_country'] = $PintaSmsSender['CountryCode'];
            }

            if (isset($PintaSmsSender['Api']) && !empty($PintaSmsSender['Api'])) {
                $apiConfig = PintaSmsSender::getApiConfigById($PintaSmsSender['Api']['Id']);
                $requirements = $apiConfig['Requirements'];

                if (isset($PintaSmsSender['SmsUnicode']) && !empty($PintaSmsSender['SmsUnicode'])) {
                    $this->data['sms_size'] = $PintaSmsSender['SmsUnicode'] == 'true' ?
                        $apiConfig['SmsSizeUnicode'] : $apiConfig['SmsSize'];
                }

                $this->data['status'] = true;

                if ($PintaSmsSender['Enabled'] == 'yes') {
                    foreach ($requirements as $requirement) {
                        if (!isset($PintaSmsSender[$requirement]) || empty($PintaSmsSender[$requirement])) {
                            $this->data['status'] = false;
                            $this->data['error_warning'] = $this->language->get('error_requirements');
                            break;
                        }
                    }
                }
            }
        }

        $this->data['countries'] = $this->language->get('countries');

        $tabs = array(
            'tab_app',
            'tab_events',
            'tab_settings',
            'tab_clickatell',
            'tab_gatewayapi',
            'tab_bulk_gate',
            'tab_turbo_sms',
            'tab_sms_ru',
            'tab_e_pochta',
            'tab_red_sms',
            'tab_bytehand',
            'tab_intel_tele',
            'tab_digital_direct',
            'tab_twilio'
        );

        foreach ($tabs as $tab) {
            $this->data[$tab] = $this->load->view($this->module_path . '/' . $tab, $this->data);
        }

        $this->data['header'] = $this->load->controller('common/header');
        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module_path, $this->data));
    }

    private function getBreadcrumbs($homePath, $extensionsPath) {
        $data = array();
        $data[] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link($homePath, "{$this->user_token}=" . $this->session->data[$this->user_token], 'SSL'),
        );
        $data[] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link($extensionsPath, "{$this->user_token}=" . $this->session->data[$this->user_token] . '&type=module', 'SSL'),
        );
        $dat[] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link($this->module_path, "{$this->user_token}=" . $this->session->data[$this->user_token] . '$type=module', 'SSL'),
        );

        return $data;
    }

    private function saveChanges()
    {
        if (!$this->user->hasPermission('modify', $this->module_path)) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $PintaSmsSenderStatus = $this->request->post['PintaSmsSender']['Enabled'] == 'yes' ? 1 : 0;
        $this->model_setting_setting->editSetting('module_pinta_sms_sender_status', array('module_pinta_sms_sender_status' => $PintaSmsSenderStatus));

        if (isset($this->request->get['store_id']) && !empty($this->request->post['PintaSmsSender']['Api'])) {
            $apiId = htmlspecialchars($this->request->post['PintaSmsSender']['Api']['Id']);
            $apiName = htmlspecialchars($this->request->post['PintaSmsSender']['Api']['Name']);
            $requirements = PintaSmsSender::getApiRequirementsById($apiId);

            if (isset($requirements)) {
                $data = array(
                    'store_id' => $this->request->get['store_id'],
                    'PintaSmsSender' => array()
                );

                foreach ($this->request->post['PintaSmsSender'] as $setting => $settingValue) {
                    if (is_array($settingValue)) {
                        foreach ($settingValue as $item => $value) {
                            $item = is_numeric($item) ? (int)$item : $item;

                            if (is_array($value)) {
                                foreach ($value as $orderStatus => $orderStatusValue) {
                                    $orderStatus = is_numeric($orderStatus) ? (int)$orderStatus : $orderStatus;
                                    $data['PintaSmsSender'][$setting][$item][$orderStatus] = htmlspecialchars($orderStatusValue);
                                }
                            } else {
                                $data['PintaSmsSender'][$setting][$item] = htmlspecialchars($value);
                            }
                        }
                    } else {
                        $data['PintaSmsSender'][$setting] = htmlspecialchars($settingValue);
                    }
                }

                $requirementsChecked = true;
                if ($PintaSmsSenderStatus == 1) {
                    foreach ($requirements as $requirement) {
                        $field = $data['PintaSmsSender'][$apiName][$requirement];
                        if (isset($field) && !empty($field)) {
                            $data['PintaSmsSender'][$requirement] = $field;
                        } else {
                            $requirementsChecked = false;
                        }
                    }
                }

                if ($requirementsChecked) {
                    $this->session->data['success'] = $this->language->get('text_success');
                    $this->model_setting_setting->editSetting('PintaSmsSender', $data, $data['store_id']);
                } else {
                    $this->session->data['error'] = $this->language->get('error_requirements');
                }
            }
        } else {
            $this->session->data['error'] = $this->language->get('text_error');
        }

    }

    private function getCatalogURL()
    {
        if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            $storeURL = HTTPS_CATALOG;
        } else {
            $storeURL = HTTP_CATALOG;
        }
        return $storeURL;
    }

    private function getCurrentStore($store_id)
    {
        if ($store_id && $store_id != 0) {
            $store = $this->model_setting_store->getStore($store_id);
        } else {
            $store['store_id'] = 0;
            $store['name'] = $this->config->get('config_name');
            $store['url'] = $this->getCatalogURL();
        }
        return $store;
    }

    public function install()
    {
        $this->pinta_sms_sender_model->install();
    }

    public function uninstall()
    {
        $this->pinta_sms_sender_model->uninstall();
    }
}
