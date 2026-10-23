<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> SMS Notifications Sender <span style="font-size:12px; color:#999">[1.9.4] by <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'SMS Notifications Sender';
$_['text_module']                           = 'Расширения';
$_['text_success']                          = 'Успешно: Вы модифицировали модуль <strong>SMS Notifications Sender</strong>!';
$_['text_error']                            = 'У Вас недостаточно прав для редактирования этого расширения!';

// General
$_['general_title']                         = 'Основное';
$_['general_status']                        = 'СМС статус:';
$_['general_api']                           = 'СМС API:';

$_['error_permission']                      = 'Предупреждение: У Вас недостаточно прав для модификации этого расширения!';
$_['error_input_form']                      = 'Пожалуйста проверьте форму на ошибки!';
$_['error_requirements']                    = 'Для использования одного из СМС сервисов, вы должны заполнить все поля во вкладке с сервисом!';

$_['subject_text']                          = 'Тема';
$_['text_yes']                              = 'Да';
$_['text_no']                               = 'Нет';
$_['text_enabled']                          = 'Включено';
$_['text_disabled']                         = 'Выключено';
$_['text_info']                             = 'Информация:';
$_['text_buy_quick_order']                  = 'Купить Quick Order';

$_['button_save']                           = 'Сохранить';
$_['button_cancel']				            = 'Отменить';
$_['button_remove']				            = 'Удалить';
$_['button_add']				            = 'Добавить';

$_['save_changes']				            = 'Сохранить изменения';

// Events
$_['events_title']                          = 'События';
$_['text_status']                           = 'Статус:';
$_['order_status']                          = 'Статус заказа:';
$_['order_message']                         = 'Сообщение:';
$_['order_characters']                      = 'Символов:';
$_['order_sms_counter']                     = 'Количество СМС:';
$_['send_sms_to_customers']                 = 'Отправить СМС клиенту';
$_['send_sms_to_owner']                     = 'Отправить СМС администратору';
$_['on_new_quick_order_placed']             = 'При новом оформлении Быстрого заказа';
$_['on_new_order_placed']                   = 'При новом оформлении заказа';
$_['on_order_status_change']                = 'При смене статуса заказа';
$_['on_successful_signup']                  = 'При успешной регистрации';
$_['help_c_m_on_new_quick_order_placed']    = 'Мини-коды:<br/>{QuickOrderID} - ID Быстрого заказа<br/>{SiteName} - Название магазина<br/>{ProductID} - ID товара<br/>{ProductAmount} - Кол-во товара<br/>{ProductName} - Название товара<br/>{Price} - Сумма<br/>{PageUrl} - Страница товара<br/>{Name} - Имя клиента<br/>{Email} - Почта клиента<br/>{Phone} - Телефон клиента<br/>{Comment} - Комментарий клиента';
$_['help_c_m_on_new_order_placed']          = 'Мини-коды:<br/><i>* Пожалуйста помните, что мини-коды будут заменены на актуальные данные заказа при загрузке страницы.</i><br/><br/>{SiteName} - Название магазина<br/>{OrderID} - ID заказа<br/>{CartTotal} - Всего Cart<br/>{ShippingAddress} - Адрес доставки<br/>{ShippingMethod} - Метод доставки<br/>{PaymentAddress} - Платежный адрес<br/>{PaymentMethod} - Платежный метод';
$_['help_c_o_on_order_status_change']       = 'Выберите, при смене статуса заказа, на какие статусы клиент будет уведомлен по СМС';
$_['help_c_m_on_order_status_change']       = 'Мини-коды:<br/>{StatusFrom} - Статус изменен с<br/>{StatusTo} - Статус изменен на {SiteName} - Название магазина<br/>{OrderID} - ID заказа';
$_['help_c_m_on_successful_signup']         = 'Мини-коды:<br/>{SiteName} - Название магазина<br/>{CustomerName} - Имя клиента';
$_['help_a_m_on_new_quick_order_placed']    = 'Мини-коды:<br/>{QuickOrderID} - ID Быстрого заказа<br/>{SiteName} - Название магазина<br/>{ProductID} - ID товара<br/>{ProductAmount} - Кол-во товара<br/>{ProductName} - Название товара<br/>{Price} - Сумма<br/>{PageUrl} - Страница товара<br/>{Name} - Имя клиента<br/>{Email} - Почта клиента<br/>{Phone} - Телефон клиента<br/>{Comment} - Комментарий клиента';
$_['help_a_m_on_new_order_placed']          = 'Мини-коды:<br/>{SiteName} - Название магазина<br/>{OrderID} - ID заказа<br/>{CartTotal} - Всего Cart';
$_['help_a_m_on_successful_signup']         = 'Мини-коды:<br/>{SiteName} - Название магазина<br/>{CustomerName} - Имя клиента';
$_['c_m_on_new_quick_order_placed']         = 'Спасибо за заказ в {SiteName}. Ваш быстрый заказ с номером: {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Спасибо за заказ в {SiteName}. Номер вашего заказа: {OrderID}.';
$_['c_m_on_order_status_change']            = 'Статус вашего заказа ({OrderID}) на {SiteName} обновлен на следующий: {StatusTo}.';
$_['c_m_on_successful_signup']              = 'Привет, {CustomerName}! Спасибо за регистрацию на {StoreName}. Наслаждайтесь нашим магазином!';
$_['a_m_on_new_quick_order_placed']         = 'Кто-то сделал заказ на вашем сайте. Номер быстрого заказа: {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Кто-то сделал заказ на вашем сайте. Номер заказа: {OrderID}.';
$_['a_m_on_successful_signup']              = 'Привет, администратор! Пользователь {CustomerName} зарегистрировался на вашем сайте!';

// Settings
$_['settings_title']                        = 'Настройки';
$_['settings_sms_unicode']                  = 'Смс с юникодом:';
$_['settings_help_sms_unicode']             = 'Максимальный размер СМС с юникодом будет меньше, чем без него.';
$_['settings_admins_phones']                = 'Номера телефона администраторов:';
$_['settings_help_admins_phones']           = 'Добавленные номера телефонов будут использованы для оповещений администраторов по СМС.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Получить свой API ключ можно с <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell использует кодировку UCS2.<br />Размер СМС с юникодом: <b>70 символов</b>';
$_['clickatell_api_key']			        = 'API Ключ:';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Получить свои API Ключи и Токен можно с <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />Размер СМС без юникода: <b>140 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['gatewayapi_api_key']		            = 'API Ключ:';
$_['gatewayapi_api_secret']		            = 'Секретный API Ключ:';
$_['gatewayapi_token']		                = 'Токен:';
$_['gatewayapi_sender']			            = 'Отправитель:';
$_['gatewayapi_help_sender']	            = 'Нечисловое имя отправителя не должно превышать более 11 символов.Числовое имя отправителя не должно превышать 15 символов.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Получить свое ID Приложения и Токен можно с <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Размер СМС без юникода: <b>612 символов</b><br />Размер СМС с юникодом: <b>268 символов</b>';
$_['bulk_gate_app_id']		                = 'ID Приложения:';
$_['bulk_gate_token']		                = 'Токен:';
$_['bulk_gate_sender']			            = 'Отправитель:';
$_['bulk_gate_help_sender']	                = 'Нечисловое имя отправителя не должно превышать более 11 символов.Числовое имя отправителя не должно превышать 15 символов.';

// TurboSmsAPI
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Получить свой Токен можно с <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Размер СМС без юникода: <b>1521 символов</b><br />Размер СМС с юникодом: <b>661 символов</b>';
$_['turbo_sms_token']		                = 'Токен:';
$_['turbo_sms_sender']			            = 'Отправитель:';
$_['turbo_sms_help_sender']	                = 'Нечисловое имя отправителя не должно превышать более 11 символов.Числовое имя отправителя не должно превышать 15 символов.';

// SmsRuAPI
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Получить свой API ID можно с <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['sms_ru_api_id']		                    = 'API ID:';
$_['sms_ru_sender']			                = 'Отправитель:';
$_['sms_ru_help_sender']	                = 'Нечисловое имя отправителя не должно превышать более 11 символов.Числовое имя отправителя не должно превышать 15 символов.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Получить свой API ID можно с <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['sms_ru_api_id']		                    = 'API ID:';
$_['sms_ru_sender']			                = 'Отправитель:';
$_['sms_ru_help_sender']	                = 'Нечисловое имя отправителя не должно превышать более 11 символов.Числовое имя отправителя не должно превышать 15 символов.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                    = 'Получить свои API ключи можно с <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['e_pochta_public_key']		            = 'Публичный ключ:';
$_['e_pochta_private_key']		            = 'Приватный ключ:';
$_['e_pochta_sender']			            = 'Отправитель:';
$_['e_pochta_help_sender']	                = 'Получить Имя отправителя можно <a href="https://atomic.center/sms/senders" target="_blank">здесь</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Получить свой API ключ можно с <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Размер СМС без юникода: <b>140 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['red_sms_login']		                    = 'Логин:';
$_['red_sms_api_key']		                = 'API Ключ:';
$_['red_sms_sender']			            = 'Отправитель:';
$_['red_sms_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Получить свой API ключ можно с <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['bytehand_api_key']		                = 'API Ключ:';
$_['bytehand_sender']			            = 'Отправитель:';
$_['bytehand_help_sender']	                = 'Получить Имя отправителя можно <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">здесь</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Получить свой API ключ можно с <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['intel_tele_username']		            = 'Логин:';
$_['intel_tele_api_key']		            = 'API Ключ:';
$_['intel_tele_sender']			            = 'Отправитель:';
$_['intel_tele_help_sender']	            = 'Получить Имя отправителя можно <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">здесь</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Получить свой API ключ можно с <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['digital_direct_api_key']		        = 'API Ключ:';
$_['digital_direct_sender']			        = 'Отправитель:';
$_['digital_direct_help_sender']	        = 'Получить Имя отправителя можно <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">здесь</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'Получить свои Account SID и Auth token можно с <a href="https://www.twilio.com" target="_blank">Twilio</a>.<br /><br />Размер СМС без юникода: <b>160 символов</b><br />Размер СМС с юникодом: <b>70 символов</b>';
$_['twilio_account_sid']                    = 'Account SID:';
$_['twilio_auth_token']                     = 'Auth token:';
$_['twilio_sender_phone']                   = 'Купленный номер на twilio.com';

// Country codes
$_['countries']                             = [
    array("code" => "AF", "name" => "Афганистан", "d_code" => "+93"),
    array("code" => "AL", "name" => "Албания", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Алжир", "d_code" => "+213"),
    array("code" => "AS", "name" => "Американское Самоа", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Андорра", "d_code" => "+376"),
    array("code" => "AO", "name" => "Ангола", "d_code" => "+244"),
    array("code" => "AI", "name" => "Ангилья", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Антигуа", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Аргентина", "d_code" => "+54"),
    array("code" => "AM", "name" => "Армения", "d_code" => "+374"),
    array("code" => "AW", "name" => "Аруба", "d_code" => "+297"),
    array("code" => "AU", "name" => "Австралия", "d_code" => "+61"),
    array("code" => "AT", "name" => "Австрия", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Азербайджан", "d_code" => "+994"),
    array("code" => "BH", "name" => "Бахрейн", "d_code" => "+973"),
    array("code" => "BD", "name" => "Бангладеш", "d_code" => "+880"),
    array("code" => "BB", "name" => "Барбадос", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Белоруссия", "d_code" => "+375"),
    array("code" => "BE", "name" => "Бельгия", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Белиз", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Бенин", "d_code" => "+229"),
    array("code" => "BM", "name" => "Бермудские о-ва", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Бутан", "d_code" => "+975"),
    array("code" => "BO", "name" => "Боливия", "d_code" => "+591"),
    array("code" => "BA", "name" => "Босния и Герцеговина", "d_code" => "+387"),
    array("code" => "BW", "name" => "Ботсвана", "d_code" => "+267"),
    array("code" => "BR", "name" => "Бразилия", "d_code" => "+55"),
    array("code" => "IO", "name" => "Британская Территория в Индийском Океане", "d_code" => "+246"),
    array("code" => "VG", "name" => "Британские Вирджинские о-ва", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Бруней", "d_code" => "+673"),
    array("code" => "BG", "name" => "Болгария", "d_code" => "+359"),
    array("code" => "BF", "name" => "Буркина Фасо", "d_code" => "+226"),
    array("code" => "MM", "name" => "Мьянма", "d_code" => "+95"),
    array("code" => "BI", "name" => "Бурунди", "d_code" => "+257"),
    array("code" => "KH", "name" => "Камбоджа", "d_code" => "+855"),
    array("code" => "CM", "name" => "Камерун", "d_code" => "+237"),
    array("code" => "CA", "name" => "Канада", "d_code" => "+1"),
    array("code" => "CV", "name" => "Капе верде", "d_code" => "+238"),
    array("code" => "KY", "name" => "Каймановы о-ва", "d_code" => "+1345"),
    array("code" => "CF", "name" => "ЦАР", "d_code" => "+236"),
    array("code" => "TD", "name" => "Чад", "d_code" => "+235"),
    array("code" => "CL", "name" => "Чили", "d_code" => "+56"),
    array("code" => "CN", "name" => "Китай", "d_code" => "+86"),
    array("code" => "CO", "name" => "Колумбия", "d_code" => "+57"),
    array("code" => "KM", "name" => "Коморские о-ва", "d_code" => "+269"),
    array("code" => "CK", "name" => "Острова Кука", "d_code" => "+682"),
    array("code" => "CR", "name" => "Коста-Рика", "d_code" => "+506"),
    array("code" => "CI", "name" => "Кот-д`Ивуар", "d_code" => "+225"),
    array("code" => "HR", "name" => "Хорватия", "d_code" => "+385"),
    array("code" => "CU", "name" => "Куба", "d_code" => "+53"),
    array("code" => "CY", "name" => "Кипр", "d_code" => "+357"),
    array("code" => "CZ", "name" => "Чехия", "d_code" => "+420"),
    array("code" => "CD", "name" => "Дем. респ. Конго", "d_code" => "+243"),
    array("code" => "DK", "name" => "Дания", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Джибути", "d_code" => "+253"),
    array("code" => "DM", "name" => "Доминика", "d_code" => "+1767"),
    array("code" => "DO", "name" => "Доминиканская республика", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Эквадор", "d_code" => "+593"),
    array("code" => "EG", "name" => "Египет", "d_code" => "+20"),
    array("code" => "SV", "name" => "Сальвадор", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Экваториальная Гвинея", "d_code" => "+240"),
    array("code" => "ER", "name" => "Эритрия", "d_code" => "+291"),
    array("code" => "EE", "name" => "Эстония", "d_code" => "+372"),
    array("code" => "ET", "name" => "Эфиопия", "d_code" => "+251"),
    array("code" => "FK", "name" => "Фолклендские о-ва", "d_code" => "+500"),
    array("code" => "FO", "name" => "Фарерские о-ва", "d_code" => "+298"),
    array("code" => "FM", "name" => "Микронезия", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Фиджи", "d_code" => "+679"),
    array("code" => "FI", "name" => "Финляндия", "d_code" => "+358"),
    array("code" => "FR", "name" => "Франция", "d_code" => "+33"),
    array("code" => "GF", "name" => "Французская Гвиана", "d_code" => "+594"),
    array("code" => "PF", "name" => "Французская полинезия", "d_code" => "+689"),
    array("code" => "GA", "name" => "Габон", "d_code" => "+241"),
    array("code" => "GE", "name" => "Грузия", "d_code" => "+995"),
    array("code" => "DE", "name" => "Германия", "d_code" => "+49"),
    array("code" => "GH", "name" => "Гана", "d_code" => "+233"),
    array("code" => "GI", "name" => "Гибралтар", "d_code" => "+350"),
    array("code" => "GR", "name" => "Греция", "d_code" => "+30"),
    array("code" => "GL", "name" => "Гренландия", "d_code" => "+299"),
    array("code" => "GD", "name" => "Гренада", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Гваделупа", "d_code" => "+590"),
    array("code" => "GU", "name" => "Гуам", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Гватемала", "d_code" => "+502"),
    array("code" => "GN", "name" => "Гвинея", "d_code" => "+224"),
    array("code" => "GW", "name" => "Гвинея Биссау", "d_code" => "+245"),
    array("code" => "GY", "name" => "Гайана", "d_code" => "+592"),
    array("code" => "HT", "name" => "Гаити", "d_code" => "+509"),
    array("code" => "HN", "name" => "Гондурас", "d_code" => "+504"),
    array("code" => "HK", "name" => "Гонконг", "d_code" => "+852"),
    array("code" => "HU", "name" => "Венгрия", "d_code" => "+36"),
    array("code" => "IS", "name" => "Исландия", "d_code" => "+354"),
    array("code" => "IN", "name" => "Индия", "d_code" => "+91"),
    array("code" => "ID", "name" => "Индонезия", "d_code" => "+62"),
    array("code" => "IR", "name" => "Иран", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Ирак", "d_code" => "+964"),
    array("code" => "IE", "name" => "Ирландия", "d_code" => "+353"),
    array("code" => "IL", "name" => "Израиль", "d_code" => "+972"),
    array("code" => "IT", "name" => "Италия", "d_code" => "+39"),
    array("code" => "JM", "name" => "Ямайка", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Япония", "d_code" => "+81"),
    array("code" => "JO", "name" => "Иордания", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Казахстан", "d_code" => "+7"),
    array("code" => "KE", "name" => "Кения", "d_code" => "+254"),
    array("code" => "KI", "name" => "Кирибати", "d_code" => "+686"),
    array("code" => "KW", "name" => "Кувейт", "d_code" => "+965"),
    array("code" => "KG", "name" => "Киргизстан", "d_code" => "+996"),
    array("code" => "LA", "name" => "Лаос", "d_code" => "+856"),
    array("code" => "LV", "name" => "Латвия", "d_code" => "+371"),
    array("code" => "LB", "name" => "Ливан", "d_code" => "+961"),
    array("code" => "LS", "name" => "Лессото", "d_code" => "+266"),
    array("code" => "LR", "name" => "Либерия", "d_code" => "+231"),
    array("code" => "LY", "name" => "Ливия", "d_code" => "+218"),
    array("code" => "LI", "name" => "Лихтенштейн", "d_code" => "+423"),
    array("code" => "LT", "name" => "Литва", "d_code" => "+370"),
    array("code" => "LU", "name" => "Люксембург", "d_code" => "+352"),
    array("code" => "MO", "name" => "Макао", "d_code" => "+853"),
    array("code" => "MK", "name" => "Македония", "d_code" => "+389"),
    array("code" => "MG", "name" => "Мадагаскар", "d_code" => "+261"),
    array("code" => "MW", "name" => "Малави", "d_code" => "+265"),
    array("code" => "MY", "name" => "Малайзия", "d_code" => "+60"),
    array("code" => "MV", "name" => "Мальдивские о-ва", "d_code" => "+960"),
    array("code" => "ML", "name" => "Мали", "d_code" => "+223"),
    array("code" => "MT", "name" => "Мальта", "d_code" => "+356"),
    array("code" => "MH", "name" => "Маршалловы о-ва", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Мартиника", "d_code" => "+596"),
    array("code" => "MR", "name" => "Мавритания", "d_code" => "+222"),
    array("code" => "MU", "name" => "Маврикий", "d_code" => "+230"),
    array("code" => "YT", "name" => "Майотта", "d_code" => "+262"),
    array("code" => "MX", "name" => "Мексика", "d_code" => "+52"),
    array("code" => "MD", "name" => "Молдавия", "d_code" => "+373"),
    array("code" => "MC", "name" => "Монако", "d_code" => "+377"),
    array("code" => "MN", "name" => "Монголия", "d_code" => "+976"),
    array("code" => "ME", "name" => "Черногория", "d_code" => "+382"),
    array("code" => "MS", "name" => "Монсеррат", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Марокко", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Мозамбик", "d_code" => "+258"),
    array("code" => "NA", "name" => "Намибия", "d_code" => "+264"),
    array("code" => "NR", "name" => "Науру", "d_code" => "+674"),
    array("code" => "NP", "name" => "Непал", "d_code" => "+977"),
    array("code" => "NL", "name" => "Нидерланды", "d_code" => "+31"),
    array("code" => "AN", "name" => "Нидерландские Антиллы", "d_code" => "+599"),
    array("code" => "NC", "name" => "Новая Каледония", "d_code" => "+687"),
    array("code" => "NZ", "name" => "Новая Зеландия", "d_code" => "+64"),
    array("code" => "NI", "name" => "Никарагуа", "d_code" => "+505"),
    array("code" => "NE", "name" => "Нигер", "d_code" => "+227"),
    array("code" => "NG", "name" => "Нигерия", "d_code" => "+234"),
    array("code" => "NU", "name" => "Ниуэ", "d_code" => "+683"),
    array("code" => "NF", "name" => "Норфолкские о-ва", "d_code" => "+672"),
    array("code" => "KP", "name" => "Северная Корея", "d_code" => "+850"),
    array("code" => "MP", "name" => "Северо-Марианские о-ва", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Норвегия", "d_code" => "+47"),
    array("code" => "OM", "name" => "Оман", "d_code" => "+968"),
    array("code" => "PK", "name" => "Пакистан", "d_code" => "+92"),
    array("code" => "PW", "name" => "Палау", "d_code" => "+680"),
    array("code" => "PS", "name" => "ПНА", "d_code" => "+970"),
    array("code" => "PA", "name" => "Панама", "d_code" => "+507"),
    array("code" => "PG", "name" => "Папуа Новая Гвинея", "d_code" => "+675"),
    array("code" => "PY", "name" => "Парагвай", "d_code" => "+595"),
    array("code" => "PE", "name" => "Перу", "d_code" => "+51"),
    array("code" => "PH", "name" => "Филиппины", "d_code" => "+63"),
    array("code" => "PL", "name" => "Польша", "d_code" => "+48"),
    array("code" => "PT", "name" => "Португалия", "d_code" => "+351"),
    array("code" => "PR", "name" => "Пуэрто Рико", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Катар", "d_code" => "+974"),
    array("code" => "CG", "name" => "Республика Конго", "d_code" => "+242"),
    array("code" => "RE", "name" => "Реюнион", "d_code" => "+262"),
    array("code" => "RO", "name" => "Румыния", "d_code" => "+40"),
    array("code" => "RU", "name" => "Россия", "d_code" => "+7"),
    array("code" => "RW", "name" => "Руанда", "d_code" => "+250"),
    array("code" => "SH", "name" => "О-ва Святой Елены", "d_code" => "+290"),
    array("code" => "KN", "name" => "Федерация Сент-Китс и Невиса", "d_code" => "+1869"),
    array("code" => "PM", "name" => "Сент Пьер", "d_code" => "+508"),
    array("code" => "VC", "name" => "Сент-Винсент и Гренадины", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Самоа", "d_code" => "+685"),
    array("code" => "SM", "name" => "Сан Марино", "d_code" => "+378"),
    array("code" => "ST", "name" => "Сан-Томе и Принсипи", "d_code" => "+239"),
    array("code" => "SA", "name" => "Саудовская Аравия", "d_code" => "+966"),
    array("code" => "SN", "name" => "Сенегал", "d_code" => "+221"),
    array("code" => "RS", "name" => "Сербия", "d_code" => "+381"),
    array("code" => "SC", "name" => "Сейшельские о-ва", "d_code" => "+248"),
    array("code" => "SL", "name" => "Сьерра Леоне", "d_code" => "+232"),
    array("code" => "SG", "name" => "Сингапур", "d_code" => "+65"),
    array("code" => "SK", "name" => "Словакия", "d_code" => "+421"),
    array("code" => "SI", "name" => "Словения", "d_code" => "+386"),
    array("code" => "SB", "name" => "Соломоновы о-ва", "d_code" => "+677"),
    array("code" => "SO", "name" => "Сомали", "d_code" => "+252"),
    array("code" => "ZA", "name" => "ЮАР", "d_code" => "+27"),
    array("code" => "KR", "name" => "Южная Корея", "d_code" => "+82"),
    array("code" => "ES", "name" => "Испания", "d_code" => "+34"),
    array("code" => "LK", "name" => "Шри Ланка", "d_code" => "+94"),
    array("code" => "LC", "name" => "Санта Лючия", "d_code" => "+1"),
    array("code" => "SD", "name" => "Судан", "d_code" => "+249"),
    array("code" => "SR", "name" => "Суринам", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Свазиленд", "d_code" => "+268"),
    array("code" => "SE", "name" => "Швеция", "d_code" => "+46"),
    array("code" => "CH", "name" => "Швейцария", "d_code" => "+41"),
    array("code" => "SY", "name" => "Сирия", "d_code" => "+963"),
    array("code" => "TW", "name" => "Тайвань", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Таджикистан", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Танзания", "d_code" => "+255"),
    array("code" => "TH", "name" => "Тайланд", "d_code" => "+66"),
    array("code" => "BS", "name" => "Багамы", "d_code" => "+1242"),
    array("code" => "GM", "name" => "Гамбия", "d_code" => "+220"),
    array("code" => "TL", "name" => "Тимор-Лешти", "d_code" => "+670"),
    array("code" => "TG", "name" => "Того", "d_code" => "+228"),
    array("code" => "TK", "name" => "Токелау", "d_code" => "+690"),
    array("code" => "TO", "name" => "Тонго", "d_code" => "+676"),
    array("code" => "TT", "name" => "Тринидад и Тобаго", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Тунис", "d_code" => "+216"),
    array("code" => "TR", "name" => "Турция", "d_code" => "+90"),
    array("code" => "TM", "name" => "Туркменистан", "d_code" => "+993"),
    array("code" => "TC", "name" => "Теркс и Кайкос", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Тувалу", "d_code" => "+688"),
    array("code" => "UG", "name" => "Уганда", "d_code" => "+256"),
    array("code" => "UA", "name" => "Украина", "d_code" => "+380"),
    array("code" => "AE", "name" => "ОАЭ", "d_code" => "+971"),
    array("code" => "GB", "name" => "Великобритания", "d_code" => "+44"),
    array("code" => "US", "name" => "США", "d_code" => "+1"),
    array("code" => "UY", "name" => "Уругвай", "d_code" => "+598"),
    array("code" => "VI", "name" => "Американские Виргинские о-ва", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Узбекистан", "d_code" => "+998"),
    array("code" => "VU", "name" => "Вануату", "d_code" => "+678"),
    array("code" => "VA", "name" => "Ватикан", "d_code" => "+39"),
    array("code" => "VE", "name" => "Венесуэла", "d_code" => "+58"),
    array("code" => "VN", "name" => "Вьетнам", "d_code" => "+84"),
    array("code" => "WF", "name" => "Уоллис и Футуна", "d_code" => "+681"),
    array("code" => "YE", "name" => "Йемен", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Замбия", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Зимбабве", "d_code" => "+263")
];