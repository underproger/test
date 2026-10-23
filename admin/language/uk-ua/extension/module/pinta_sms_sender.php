<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> Відправник SMS-сповіщень <span style="font-size:12px; color:#999">[1.9.4] від <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'Відправник SMS-сповіщень';
$_['text_module']                           = 'Розширення';
$_['text_success']                          = 'Успішно: Ви змодифікували модуль <strong>Відправник SMS-сповіщень</strong>!';
$_['text_error']                            = 'У вас недостатньо прав для редагування цього розширення!';

// Загальні
$_['general_title']                         = 'Загальне';
$_['general_status']                        = 'SMS-статус:';
$_['general_api']                           = 'SMS API:';

$_['error_permission']                      = 'Попередження: У вас недостатньо прав для модифікації цього розширення!';
$_['error_input_form']                      = 'Будь ласка, перевірте форму на помилки!';
$_['error_requirements']                    = 'Для використання одного з SMS-сервісів, ви повинні заповнити всі поля на вкладці з сервісом!';

$_['subject_text']                          = 'Тема';
$_['text_yes']                              = 'Так';
$_['text_no']                               = 'Ні';
$_['text_enabled']                          = 'Увімкнено';
$_['text_disabled']                         = 'Вимкнено';
$_['text_info']                             = 'Інформація:';
$_['text_buy_quick_order']                  = 'Купити Швидке замовлення';

$_['button_save']                           = 'Зберегти';
$_['button_cancel']				            = 'Скасувати';
$_['button_remove']				            = 'Видалити';
$_['button_add']				            = 'Додати';

$_['save_changes']				            = 'Зберегти зміни';

// Події
$_['events_title']                          = 'Події';
$_['text_status']                           = 'Статус:';
$_['order_status']                          = 'Статус замовлення:';
$_['order_message']                         = 'Повідомлення:';
$_['order_characters']                      = 'Символів:';
$_['order_sms_counter']                     = 'Кількість SMS:';
$_['send_sms_to_customers']                 = 'Надіслати SMS клієнту';
$_['send_sms_to_owner']                     = 'Надіслати SMS адміністратору';
$_['on_new_quick_order_placed']             = 'При новому оформленні Швидкого замовлення';
$_['on_new_order_placed']                   = 'При новому оформленні замовлення';
$_['on_order_status_change']                = 'При зміні статусу замовлення';
$_['on_successful_signup']                  = 'При успішній реєстрації';
$_['help_c_m_on_new_quick_order_placed']    = 'Міні-коди:<br/>{QuickOrderID} - ID Швидкого замовлення<br/>{SiteName} - Назва магазину<br/>{ProductID} - ID товару<br/>{ProductAmount} - Кількість товару<br/>{ProductName} - Назва товару<br/>{Price} - Сума<br/>{PageUrl} - Сторінка товару<br/>{Name} - Ім\'я клієнта<br/>{Email} - Пошта клієнта<br/>{Phone} - Телефон клієнта<br/>{Comment} - Коментар клієнта';
$_['help_c_m_on_new_order_placed']          = 'Міні-коди:<br/><i>* Будь ласка, пам\'ятайте, що міні-коди будуть замінені на актуальні дані замовлення при завантаженні сторінки.</i><br/><br/>{SiteName} - Назва магазину<br/>{OrderID} - ID замовлення<br/>{CartTotal} - Всього Cart<br/>{ShippingAddress} - Адреса доставки<br/>{ShippingMethod} - Метод доставки<br/>{PaymentAddress} - Платіжна адреса<br/>{PaymentMethod} - Платіжний метод';
$_['help_c_o_on_order_status_change']       = 'Виберіть, при зміні статусу замовлення, на які статуси клієнт буде сповіщений по SMS';
$_['help_c_m_on_order_status_change']       = 'Міні-коди:<br/>{StatusFrom} - Статус змінено з<br/>{StatusTo} - Статус змінено на {SiteName} - Назва магазину<br/>{OrderID} - ID замовлення';
$_['help_c_m_on_successful_signup']         = 'Міні-коди:<br/>{SiteName} - Назва магазину<br/>{CustomerName} - Ім\'я клієнта';
$_['help_a_m_on_new_quick_order_placed']    = 'Міні-коди:<br/>{QuickOrderID} - ID Швидкого замовлення<br/>{SiteName} - Назва магазину<br/>{ProductID} - ID товару<br/>{ProductAmount} - Кількість товару<br/>{ProductName} - Назва товару<br/>{Price} - Сума<br/>{PageUrl} - Сторінка товару<br/>{Name} - Ім\'я клієнта<br/>{Email} - Пошта клієнта<br/>{Phone} - Телефон клієнта<br/>{Comment} - Коментар клієнта';
$_['help_a_m_on_new_order_placed']          = 'Міні-коди:<br/>{SiteName} - Назва магазину<br/>{OrderID} - ID замовлення<br/>{CartTotal} - Всього Cart';
$_['help_a_m_on_successful_signup']         = 'Міні-коди:<br/>{SiteName} - Назва магазину<br/>{CustomerName} - Ім\'я клієнта';
$_['c_m_on_new_quick_order_placed']         = 'Дякуємо за замовлення в {SiteName}. Ваше Швидке замовлення з номером: {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Дякуємо за замовлення в {SiteName}. Номер вашого замовлення: {OrderID}.';
$_['c_m_on_order_status_change']            = 'Статус вашого замовлення ({OrderID}) на {SiteName} оновлений на наступний: {StatusTo}.';
$_['c_m_on_successful_signup']              = 'Привіт, {CustomerName}! Дякуємо за реєстрацію на {StoreName}. Насолоджуйтеся нашим магазином!';
$_['a_m_on_new_quick_order_placed']         = 'Хтось зробив замовлення на вашому сайті. Номер Швидкого замовлення: {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Хтось зробив замовлення на вашому сайті. Номер замовлення: {OrderID}.';
$_['a_m_on_successful_signup']              = 'Привіт, адміністратор! Користувач {CustomerName} зареєструвався на вашому сайті!';

// Налаштування
$_['settings_title']                        = 'Налаштування';
$_['settings_sms_unicode']                  = 'SMS з юнікодом:';
$_['settings_help_sms_unicode']             = 'Максимальний розмір SMS з юнікодом буде менший, ніж без нього.';
$_['settings_admins_phones']                = 'Номери телефонів адміністраторів:';
$_['settings_help_admins_phones']           = 'Додані номери телефонів будуть використовуватися для повідомлень адміністраторів по SMS.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Отримати свій API ключ можна з <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell використовує кодування UCS2.<br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['clickatell_api_key']			        = 'API Ключ:';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Отримати свої API Ключі і Токен можна з <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />Розмір SMS без юнікода: <b>140 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['gatewayapi_api_key']		            = 'API Ключ:';
$_['gatewayapi_api_secret']		            = 'Секретний API Ключ:';
$_['gatewayapi_token']		                = 'Токен:';
$_['gatewayapi_sender']			            = 'Відправник:';
$_['gatewayapi_help_sender']	            = 'Нецифрове ім\'я відправника не повинно перевищувати більше 11 символів. Цифрове ім\'я відправника не повинно перевищувати 15 символів.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Отримати своє ID Додатка і Токен можна з <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Розмір SMS без юнікоду: <b>612 символів</b><br />Розмір SMS з юнікодом: <b>268 символів</b>';
$_['bulk_gate_app_id']		                = 'ID Додатка:';
$_['bulk_gate_token']		                = 'Токен:';
$_['bulk_gate_sender']			            = 'Відправник:';
$_['bulk_gate_help_sender']	                = 'Нецифрове ім\'я відправника не повинно перевищувати більше 11 символів. Цифрове ім\'я відправника не повинно перевищувати 15 символів.';

// TurboSmsAPI
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Отримати свій Токен можна з <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Розмір SMS без юнікоду: <b>1521 символів</b><br />Розмір SMS з юнікодом: <b>661 символів</b>';
$_['turbo_sms_token']		                = 'Токен:';
$_['turbo_sms_sender']			            = 'Відправник:';
$_['turbo_sms_help_sender']	                = 'Нецифрове ім\'я відправника не повинно перевищувати більше 11 символів. Цифрове ім\'я відправника не повинно перевищувати 15 символів.';

// SmsRuAPI
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Отримати свій API ID можна з <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['sms_ru_api_id']		                    = 'API ID:';
$_['sms_ru_sender']			                = 'Відправник:';
$_['sms_ru_help_sender']	                = 'Нецифрове ім\'я відправника не повинно перевищувати більше 11 символів. Цифрове ім\'я відправника не повинно перевищувати 15 символів.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Отримати свій API ID можна з <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['sms_ru_api_id']		                    = 'API ID:';
$_['sms_ru_sender']			                = 'Відправник:';
$_['sms_ru_help_sender']	                = 'Нецифрове ім\'я відправника не повинно перевищувати більше 11 символів. Цифрове ім\'я відправника не повинно перевищувати 15 символів.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                    = 'Отримати свої API ключі можна з <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['e_pochta_public_key']		            = 'Публічний ключ:';
$_['e_pochta_private_key']		            = 'Приватний ключ:';
$_['e_pochta_sender']			            = 'Відправник:';
$_['e_pochta_help_sender']	                = 'Отримати Ім\'я відправника можна <a href="https://atomic.center/sms/senders" target="_blank">тут</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Отримати свій API ключ можна з <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Розмір SMS без юнікоду: <b>140 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['red_sms_login']		                    = 'Логін:';
$_['red_sms_api_key']		                = 'API Ключ:';
$_['red_sms_sender']			            = 'Відправник:';
$_['red_sms_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Отримати свій API ключ можна з <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['bytehand_api_key']		                = 'API Ключ:';
$_['bytehand_sender']			            = 'Відправник:';
$_['bytehand_help_sender']	                = 'Отримати Ім\'я відправника можна <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">тут</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Отримати свій API ключ можна з <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['intel_tele_username']		            = 'Логін:';
$_['intel_tele_api_key']		            = 'API Ключ:';
$_['intel_tele_sender']			            = 'Відправник:';
$_['intel_tele_help_sender']	            = 'Отримати Ім\'я відправника можна <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">тут</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Отримати свій API ключ можна з <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Розмір SMS без юнікоду: <b>160 символів</b><br />Розмір SMS з юнікодом: <b>70 символів</b>';
$_['digital_direct_api_key']		        = 'API Ключ:';
$_['digital_direct_sender']			        = 'Відправник:';
$_['digital_direct_help_sender']	        = 'Отримати Ім\'я відправника можна <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">тут</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'Отримати свої Account SID та Auth token можна на <a href="https://www.twilio.com" target="_blank">Twilio</a>.<br /><br />Розмір SMS без Unicode: <b>160 символів</b><br />Розмір SMS з Unicode: <b>70 символів</b>';
$_['twilio_account_sid']                    = 'Account SID:';
$_['twilio_auth_token']                     = 'Auth token:';
$_['twilio_sender_phone']                   = 'Придбаний номер на twilio.com';

// Коди країн
$_['countries']                             = [
    array("code" => "AF", "name" => "Афганістан", "d_code" => "+93"),
    array("code" => "AL", "name" => "Албанія", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Алжир", "d_code" => "+213"),
    array("code" => "AS", "name" => "Американське Самоа", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Андорра", "d_code" => "+376"),
    array("code" => "AO", "name" => "Ангола", "d_code" => "+244"),
    array("code" => "AI", "name" => "Ангілья", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Антигуа", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Аргентина", "d_code" => "+54"),
    array("code" => "AM", "name" => "Вірменія", "d_code" => "+374"),
    array("code" => "AW", "name" => "Аруба", "d_code" => "+297"),
    array("code" => "AU", "name" => "Австралія", "d_code" => "+61"),
    array("code" => "AT", "name" => "Австрія", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Азербайджан", "d_code" => "+994"),
    array("code" => "BH", "name" => "Бахрейн", "d_code" => "+973"),
    array("code" => "BD", "name" => "Бангладеш", "d_code" => "+880"),
    array("code" => "BB", "name" => "Барбадос", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Білорусь", "d_code" => "+375"),
    array("code" => "BE", "name" => "Бельгія", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Беліз", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Бенін", "d_code" => "+229"),
    array("code" => "BM", "name" => "Бермудські о-ва", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Бутан", "d_code" => "+975"),
    array("code" => "BO", "name" => "Болівія", "d_code" => "+591"),
    array("code" => "BA", "name" => "Боснія і Герцеговина", "d_code" => "+387"),
    array("code" => "BW", "name" => "Ботсвана", "d_code" => "+267"),
    array("code" => "BR", "name" => "Бразилія", "d_code" => "+55"),
    array("code" => "IO", "name" => "Британська Територія в Індійському Океані", "d_code" => "+246"),
    array("code" => "VG", "name" => "Британські Віргінські о-ва", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Бруней", "d_code" => "+673"),
    array("code" => "BG", "name" => "Болгарія", "d_code" => "+359"),
    array("code" => "BF", "name" => "Буркіна-Фасо", "d_code" => "+226"),
    array("code" => "MM", "name" => "М'янма", "d_code" => "+95"),
    array("code" => "BI", "name" => "Бурунді", "d_code" => "+257"),
    array("code" => "KH", "name" => "Камбоджа", "d_code" => "+855"),
    array("code" => "CM", "name" => "Камерун", "d_code" => "+237"),
    array("code" => "CA", "name" => "Канада", "d_code" => "+1"),
    array("code" => "CV", "name" => "Кабо-Верде", "d_code" => "+238"),
    array("code" => "KY", "name" => "Кайманові о-ва", "d_code" => "+1345"),
    array("code" => "CF", "name" => "ЦАР", "d_code" => "+236"),
    array("code" => "TD", "name" => "Чад", "d_code" => "+235"),
    array("code" => "CL", "name" => "Чилі", "d_code" => "+56"),
    array("code" => "CN", "name" => "Китай", "d_code" => "+86"),
    array("code" => "CO", "name" => "Колумбія", "d_code" => "+57"),
    array("code" => "KM", "name" => "Коморські о-ва", "d_code" => "+269"),
    array("code" => "CK", "name" => "Острови Кука", "d_code" => "+682"),
    array("code" => "CR", "name" => "Коста-Рика", "d_code" => "+506"),
    array("code" => "CI", "name" => "Кот-д'Івуар", "d_code" => "+225"),
    array("code" => "HR", "name" => "Хорватія", "d_code" => "+385"),
    array("code" => "CU", "name" => "Куба", "d_code" => "+53"),
    array("code" => "CY", "name" => "Кіпр", "d_code" => "+357"),
    array("code" => "CZ", "name" => "Чехія", "d_code" => "+420"),
    array("code" => "CD", "name" => "Дем. Респ. Конго", "d_code" => "+243"),
    array("code" => "DK", "name" => "Данія", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Джибуті", "d_code" => "+253"),
    array("code" => "DM", "name" => "Домініка", "d_code" => "+1767"),
    array("code" => "DO", "name" => "Домініканська Республіка", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Еквадор", "d_code" => "+593"),
    array("code" => "EG", "name" => "Єгипет", "d_code" => "+20"),
    array("code" => "SV", "name" => "Сальвадор", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Екваторіальна Гвінея", "d_code" => "+240"),
    array("code" => "ER", "name" => "Еритрея", "d_code" => "+291"),
    array("code" => "EE", "name" => "Естонія", "d_code" => "+372"),
    array("code" => "ET", "name" => "Ефіопія", "d_code" => "+251"),
    array("code" => "FK", "name" => "Фолклендські о-ва", "d_code" => "+500"),
    array("code" => "FO", "name" => "Фарерські о-ва", "d_code" => "+298"),
    array("code" => "FM", "name" => "Мікронезія", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Фіджі", "d_code" => "+679"),
    array("code" => "FI", "name" => "Фінляндія", "d_code" => "+358"),
    array("code" => "FR", "name" => "Франція", "d_code" => "+33"),
    array("code" => "GF", "name" => "Французька Гвіана", "d_code" => "+594"),
    array("code" => "PF", "name" => "Французька Полінезія", "d_code" => "+689"),
    array("code" => "GA", "name" => "Габон", "d_code" => "+241"),
    array("code" => "GE", "name" => "Грузія", "d_code" => "+995"),
    array("code" => "DE", "name" => "Німеччина", "d_code" => "+49"),
    array("code" => "GH", "name" => "Гана", "d_code" => "+233"),
    array("code" => "GI", "name" => "Гібралтар", "d_code" => "+350"),
    array("code" => "GR", "name" => "Греція", "d_code" => "+30"),
    array("code" => "GL", "name" => "Гренландія", "d_code" => "+299"),
    array("code" => "GD", "name" => "Гренада", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Гваделупа", "d_code" => "+590"),
    array("code" => "GU", "name" => "Гуам", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Гватемала", "d_code" => "+502"),
    array("code" => "GN", "name" => "Гвінея", "d_code" => "+224"),
    array("code" => "GW", "name" => "Гвінея-Бісау", "d_code" => "+245"),
    array("code" => "GY", "name" => "Гаяна", "d_code" => "+592"),
    array("code" => "HT", "name" => "Гаїті", "d_code" => "+509"),
    array("code" => "HN", "name" => "Гондурас", "d_code" => "+504"),
    array("code" => "HK", "name" => "Гонконг", "d_code" => "+852"),
    array("code" => "HU", "name" => "Угорщина", "d_code" => "+36"),
    array("code" => "IS", "name" => "Ісландія", "d_code" => "+354"),
    array("code" => "IN", "name" => "Індія", "d_code" => "+91"),
    array("code" => "ID", "name" => "Індонезія", "d_code" => "+62"),
    array("code" => "IR", "name" => "Іран", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Ірак", "d_code" => "+964"),
    array("code" => "IE", "name" => "Ірландія", "d_code" => "+353"),
    array("code" => "IL", "name" => "Ізраїль", "d_code" => "+972"),
    array("code" => "IT", "name" => "Італія", "d_code" => "+39"),
    array("code" => "JM", "name" => "Ямайка", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Японія", "d_code" => "+81"),
    array("code" => "JO", "name" => "Йорданія", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Казахстан", "d_code" => "+7"),
    array("code" => "KE", "name" => "Кенія", "d_code" => "+254"),
    array("code" => "KI", "name" => "Кірибаті", "d_code" => "+686"),
    array("code" => "KW", "name" => "Кувейт", "d_code" => "+965"),
    array("code" => "KG", "name" => "Киргизстан", "d_code" => "+996"),
    array("code" => "LA", "name" => "Лаос", "d_code" => "+856"),
    array("code" => "LV", "name" => "Латвія", "d_code" => "+371"),
    array("code" => "LB", "name" => "Ліван", "d_code" => "+961"),
    array("code" => "LS", "name" => "Лесото", "d_code" => "+266"),
    array("code" => "LR", "name" => "Ліберія", "d_code" => "+231"),
    array("code" => "LY", "name" => "Лівія", "d_code" => "+218"),
    array("code" => "LI", "name" => "Ліхтенштейн", "d_code" => "+423"),
    array("code" => "LT", "name" => "Литва", "d_code" => "+370"),
    array("code" => "LU", "name" => "Люксембург", "d_code" => "+352"),
    array("code" => "MO", "name" => "Макао", "d_code" => "+853"),
    array("code" => "MK", "name" => "Македонія", "d_code" => "+389"),
    array("code" => "MG", "name" => "Мадагаскар", "d_code" => "+261"),
    array("code" => "MW", "name" => "Малаві", "d_code" => "+265"),
    array("code" => "MY", "name" => "Малайзія", "d_code" => "+60"),
    array("code" => "MV", "name" => "Мальдівські о-ва", "d_code" => "+960"),
    array("code" => "ML", "name" => "Малі", "d_code" => "+223"),
    array("code" => "MT", "name" => "Мальта", "d_code" => "+356"),
    array("code" => "MH", "name" => "Маршаллові о-ва", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Мартиніка", "d_code" => "+596"),
    array("code" => "MR", "name" => "Мавританія", "d_code" => "+222"),
    array("code" => "MU", "name" => "Маврикій", "d_code" => "+230"),
    array("code" => "YT", "name" => "Майотта", "d_code" => "+262"),
    array("code" => "MX", "name" => "Мексика", "d_code" => "+52"),
    array("code" => "MD", "name" => "Молдова", "d_code" => "+373"),
    array("code" => "MC", "name" => "Монако", "d_code" => "+377"),
    array("code" => "MN", "name" => "Монголія", "d_code" => "+976"),
    array("code" => "ME", "name" => "Чорногорія", "d_code" => "+382"),
    array("code" => "MS", "name" => "Монтсеррат", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Марокко", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Мозамбік", "d_code" => "+258"),
    array("code" => "NA", "name" => "Намібія", "d_code" => "+264"),
    array("code" => "NR", "name" => "Науру", "d_code" => "+674"),
    array("code" => "NP", "name" => "Непал", "d_code" => "+977"),
    array("code" => "NL", "name" => "Нідерланди", "d_code" => "+31"),
    array("code" => "AN", "name" => "Нідерландські Антильські о-ва", "d_code" => "+599"),
    array("code" => "NC", "name" => "Нова Каледонія", "d_code" => "+687"),
    array("code" => "NZ", "name" => "Нова Зеландія", "d_code" => "+64"),
    array("code" => "NI", "name" => "Нікарагуа", "d_code" => "+505"),
    array("code" => "NE", "name" => "Нігер", "d_code" => "+227"),
    array("code" => "NG", "name" => "Нігерія", "d_code" => "+234"),
    array("code" => "NU", "name" => "Ніуе", "d_code" => "+683"),
    array("code" => "NF", "name" => "Норфолкські о-ва", "d_code" => "+672"),
    array("code" => "KP", "name" => "Північна Корея", "d_code" => "+850"),
    array("code" => "MP", "name" => "Північні Маріанські о-ва", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Норвегія", "d_code" => "+47"),
    array("code" => "OM", "name" => "Оман", "d_code" => "+968"),
    array("code" => "PK", "name" => "Пакистан", "d_code" => "+92"),
    array("code" => "PW", "name" => "Палау", "d_code" => "+680"),
    array("code" => "PS", "name" => "Палестинська територія", "d_code" => "+970"),
    array("code" => "PA", "name" => "Панама", "d_code" => "+507"),
    array("code" => "PG", "name" => "Папуа-Нова Гвінея", "d_code" => "+675"),
    array("code" => "PY", "name" => "Парагвай", "d_code" => "+595"),
    array("code" => "PE", "name" => "Перу", "d_code" => "+51"),
    array("code" => "PH", "name" => "Філіппіни", "d_code" => "+63"),
    array("code" => "PL", "name" => "Польща", "d_code" => "+48"),
    array("code" => "PT", "name" => "Португалія", "d_code" => "+351"),
    array("code" => "PR", "name" => "Пуерто-Рико", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Катар", "d_code" => "+974"),
    array("code" => "CG", "name" => "Республіка Конго", "d_code" => "+242"),
    array("code" => "RE", "name" => "Реюньйон", "d_code" => "+262"),
    array("code" => "RO", "name" => "Румунія", "d_code" => "+40"),
    array("code" => "RU", "name" => "Росія", "d_code" => "+7"),
    array("code" => "RW", "name" => "Руанда", "d_code" => "+250"),
    array("code" => "SH", "name" => "Острови Святого Єлени", "d_code" => "+290"),
    array("code" => "KN", "name" => "Федерація Сент-Кіттс і Невіс", "d_code" => "+1869"),
    array("code" => "PM", "name" => "Сен-П'єр і Мікелон", "d_code" => "+508"),
    array("code" => "VC", "name" => "Сент-Вінсент і Гренадини", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Самоа", "d_code" => "+685"),
    array("code" => "SM", "name" => "Сан-Марино", "d_code" => "+378"),
    array("code" => "ST", "name" => "Сан-Томе і Принсіпі", "d_code" => "+239"),
    array("code" => "SA", "name" => "Саудівська Аравія", "d_code" => "+966"),
    array("code" => "SN", "name" => "Сенегал", "d_code" => "+221"),
    array("code" => "RS", "name" => "Сербія", "d_code" => "+381"),
    array("code" => "SC", "name" => "Сейшельські о-ва", "d_code" => "+248"),
    array("code" => "SL", "name" => "Сьєрра-Леоне", "d_code" => "+232"),
    array("code" => "SG", "name" => "Сінгапур", "d_code" => "+65"),
    array("code" => "SK", "name" => "Словаччина", "d_code" => "+421"),
    array("code" => "SI", "name" => "Словенія", "d_code" => "+386"),
    array("code" => "SB", "name" => "Соломонові о-ва", "d_code" => "+677"),
    array("code" => "SO", "name" => "Сомалі", "d_code" => "+252"),
    array("code" => "ZA", "name" => "ПАР", "d_code" => "+27"),
    array("code" => "KR", "name" => "Південна Корея", "d_code" => "+82"),
    array("code" => "ES", "name" => "Іспанія", "d_code" => "+34"),
    array("code" => "LK", "name" => "Шрі-Ланка", "d_code" => "+94"),
    array("code" => "LC", "name" => "Сент-Люсія", "d_code" => "+1"),
    array("code" => "SD", "name" => "Судан", "d_code" => "+249"),
    array("code" => "SR", "name" => "Суринам", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Есватіні", "d_code" => "+268"),
    array("code" => "SE", "name" => "Швеція", "d_code" => "+46"),
    array("code" => "CH", "name" => "Швейцарія", "d_code" => "+41"),
    array("code" => "SY", "name" => "Сирія", "d_code" => "+963"),
    array("code" => "TW", "name" => "Тайвань", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Таджикистан", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Танзанія", "d_code" => "+255"),
    array("code" => "TH", "name" => "Таїланд", "d_code" => "+66"),
    array("code" => "BS", "name" => "Багами", "d_code" => "+1242"),
    array("code" => "GM", "name" => "Гамбія", "d_code" => "+220"),
    array("code" => "TL", "name" => "Тимор-Лешти", "d_code" => "+670"),
    array("code" => "TG", "name" => "Того", "d_code" => "+228"),
    array("code" => "TK", "name" => "Токелау", "d_code" => "+690"),
    array("code" => "TO", "name" => "Тонга", "d_code" => "+676"),
    array("code" => "TT", "name" => "Тринідад і Тобаго", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Туніс", "d_code" => "+216"),
    array("code" => "TR", "name" => "Туреччина", "d_code" => "+90"),
    array("code" => "TM", "name" => "Туркменістан", "d_code" => "+993"),
    array("code" => "TC", "name" => "Теркс і Кайкос", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Тувалу", "d_code" => "+688"),
    array("code" => "UG", "name" => "Уганда", "d_code" => "+256"),
    array("code" => "UA", "name" => "Україна", "d_code" => "+380"),
    array("code" => "AE", "name" => "ОАЕ", "d_code" => "+971"),
    array("code" => "GB", "name" => "Великобританія", "d_code" => "+44"),
    array("code" => "US", "name" => "США", "d_code" => "+1"),
    array("code" => "UY", "name" => "Уругвай", "d_code" => "+598"),
    array("code" => "VI", "name" => "Американські Віргінські о-ва", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Узбекистан", "d_code" => "+998"),
    array("code" => "VU", "name" => "Вануату", "d_code" => "+678"),
    array("code" => "VA", "name" => "Ватикан", "d_code" => "+39"),
    array("code" => "VE", "name" => "Венесуела", "d_code" => "+58"),
    array("code" => "VN", "name" => "В'єтнам", "d_code" => "+84"),
    array("code" => "WF", "name" => "Уолліс і Футуна", "d_code" => "+681"),
    array("code" => "YE", "name" => "Ємен", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Замбія", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Зімбабве", "d_code" => "+263")
];