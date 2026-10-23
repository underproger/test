<?php
class ControllerCommonFooter extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('common/footer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->request->post['form_name'] == "subscribe") {
			if ( $this->validate() ) {
				$mail = new Mail($this->config->get('config_mail_engine'));
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

				$mail->setTo($this->config->get('config_email'));
				$mail->setFrom($this->request->post['subscribe_email']);
				$mail->setReplyTo($this->request->post['subscribe_email']);
				$mail->setSender(html_entity_decode('Natalize', ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(html_entity_decode('Підписка на розсилку'));
				$mail->setText("Email: " . $this->request->post['subscribe_email']);
				$mail->send();

				$this->response->redirect($this->url->link('information/contact/success_subscribe'));
			}
		}

		if (isset($this->error['subscribe_email'])) {
			$data['error_subscribe_email'] = $this->error['subscribe_email'];
		} else {
			$data['error_subscribe_email'] = '';
		}

		$data['blog'] = $this->url->link('blog/latest');
		$data['contact'] = $this->url->link('information/contact', '', true);
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap', '', true);
		$data['tracking'] = $this->url->link('information/tracking', '', true);
		$data['manufacturer'] = $this->url->link('product/manufacturer', '', true);
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special', '', true);
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['about'] = $this->url->link('information/information&information_id=4', '', true);
		$data['program'] = $this->url->link('information/information&information_id=9', '', true);
		$data['cert'] = $this->url->link('information/information&information_id=10', '', true);
		$data['privacy'] = $this->url->link('information/information&information_id=11', '', true);
		$data['payment'] = $this->url->link('information/information&information_id=6', '', true);
		$data['delivery'] = $this->url->link('information/information&information_id=3', '', true);
		$data['return'] = $this->url->link('information/information&information_id=5', '', true);
		$data['reserv'] = $this->url->link('information/information&information_id=8', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		$data['telephone'] = $this->config->get('config_telephone');
		$data['email'] = $this->config->get('config_email');
		$data['telegram'] = $this->config->get('config_telegram');
		$data['viber'] = $this->config->get('config_viber');
		$data['facebook'] = $this->config->get('config_facebook');
		$data['instagram'] = $this->config->get('config_instagram');
		$data['youtube'] = $this->config->get('config_youtube');
		
		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		
		return $this->load->view('common/footer', $data);
	}

	protected function validate() {
		if (!filter_var($this->request->post['subscribe_email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['subscribe_email'] = $this->language->get('error_subscribe_email');
		}

		// Captcha
		if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('contact', (array)$this->config->get('config_captcha_page'))) {
			$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

			if ($captcha) {
				$this->error['captcha'] = $captcha;
			}
		}

		return !$this->error;
	}

}
