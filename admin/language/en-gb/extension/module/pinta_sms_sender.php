<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> SMS Notifications Sender <span style="font-size:12px; color:#999">[1.9.4] by <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'SMS Notifications Sender';
$_['text_module']                           = 'Extensions';
$_['text_success']                          = 'Success: You have modified module <strong>SMS Notifications Sender</strong>!';
$_['text_error']                            = 'You do not have permissions to edit this module!';

// General
$_['general_title']                         = 'General';
$_['general_status']                        = 'SMS status:';
$_['general_api']                           = 'SMS API:';

$_['error_permission']                      = 'Warning: You do not have permission to modify module SMS Notifications Sender!';
$_['error_input_form']                      = 'Please check the form for errors!';
$_['error_requirements']                    = 'For use one of SMS Services, you must fill all fields in tab with service!';

$_['subject_text']                          = 'Subject';
$_['text_yes']                              = 'Yes';
$_['text_no']                               = 'No';
$_['text_enabled']                          = 'Enabled';
$_['text_disabled']                         = 'Disabled';
$_['text_info']                             = 'Information:';
$_['text_buy_quick_order']                  = 'Buy Quick Order';

$_['button_save']                           = 'Save';
$_['button_cancel']				            = 'Cancel';
$_['button_remove']				            = 'Remove';
$_['button_add']				            = 'Add';

$_['save_changes']				            = 'Save changes';

// Events
$_['events_title']                          = 'Events';
$_['text_status']                           = 'Status:';
$_['order_status']                          = 'Order status:';
$_['order_message']                         = 'Message:';
$_['order_characters']                      = 'Characters:';
$_['order_sms_counter']                     = 'SMS Counter:';
$_['send_sms_to_customers']                 = 'Send SMS to customer';
$_['send_sms_to_owner']                     = 'Send SMS to store owner';
$_['on_new_quick_order_placed']             = 'On new Quick Order placed';
$_['on_new_order_placed']                   = 'On new order placed';
$_['on_order_status_change']                = 'On order status change';
$_['on_successful_signup']                  = 'On successful signup';
$_['help_c_m_on_new_quick_order_placed']    = 'Short-codes:<br/>{QuickOrderID} - Quick Order ID<br/>{SiteName} - Store name<br/>{ProductID} - Product ID<br/>{ProductAmount} - Amount of Product<br/>{ProductName} - Product Name<br/>{Price} - Total Price<br/>{PageUrl} - Product Link URL<br/>{Name} - Customer Name<br/>{Email} - Customer Email<br/>{Phone} - Customer Phone<br/>{Comment} - Customer Comment';
$_['help_c_m_on_new_order_placed']          = 'Short-codes:<br/><i>* Please mind that these shortcodes will be replaced by the actual order information at runtime.</i><br/><br/>{SiteName} - Store name<br/>{OrderID} - Order ID<br/>{CartTotal} - Cart Total<br/>{ShippingAddress} - Shipping Address<br/>{ShippingMethod} - Shipping Method<br/>{PaymentAddress} - Payment Address<br/>{PaymentMethod} - Payment Method';
$_['help_c_o_on_order_status_change']       = 'Choose on which order status changes you want the customer to be notified via SMS';
$_['help_c_m_on_order_status_change']       = 'Short-codes:<br/>{QuickOrderID} - Quick Order ID<br/>{SiteName} - Store name<br/>{ProductID} - Product ID<br/>{ProductAmount} - Amount of Product<br/>{ProductName} - Product Name<br/>{Price} - Total Price<br/>{PageUrl} - Product Link URL<br/>{Name} - Customer Name<br/>{Email} - Customer Email<br/>{Phone} - Customer Phone<br/>{Comment} - Customer Comment';
$_['help_c_m_on_successful_signup']         = 'Short-codes:<br/>{SiteName} - Store name<br/>{CustomerName} - Customer name';
$_['help_a_m_on_new_quick_order_placed']    = 'Short-codes:<br/>{QuickOrderID} - Quick Order ID<br/>{SiteName} - Store name<br/>{ProductID} - Product ID<br/>{ProductAmount} - Amount of Product<br/>{ProductName} - Product Name<br/>{Price} - Total Price<br/>{PageUrl} - Product Link URL<br/>{Name} - Customer Name<br/>{Email} - Customer Email<br/>{Phone} - Customer Phone<br/>{Comment} - Customer Comment';
$_['help_a_m_on_new_order_placed']          = 'Short-codes:<br/>{SiteName} - Store name<br/>{OrderID} - Order ID<br/>{CartTotal} - Cart Total';
$_['help_a_m_on_successful_signup']         = 'Short-codes:<br/>{SiteName} - Store name<br/>{CustomerName} - Customer name';
$_['c_m_on_new_quick_order_placed']         = 'Thank you for ordering from {SiteName}. Your Quick Order ID is: {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Thank you for ordering from {SiteName}. Your order ID is: {OrderID}.';
$_['c_m_on_order_status_change']            = 'Your order ({OrderID}) at {SiteName} has been updated to the following status: {StatusTo}.';
$_['c_m_on_successful_signup']              = 'Hello, {CustomerName}! Thank you for registering at {StoreName}. Enjoy our store!';
$_['a_m_on_new_quick_order_placed']         = 'Someone ordered something from your store. Quick Order ID: {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Someone ordered something from your store. The order ID is: {OrderID}.';
$_['a_m_on_successful_signup']              = 'Hello, admin! The customer {CustomerName} registered at your store!';

// Settings
$_['settings_title']                        = 'Settings';
$_['settings_sms_unicode']                  = 'Sms with unicode:';
$_['settings_help_sms_unicode']             = 'The maximum size of SMS with unicode will be smaller than without it.';
$_['settings_admins_phones']                = 'Admins phone numbers:';
$_['settings_help_admins_phones']           = 'The added phone numbers will be used for admin notifications.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Get your API key from <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell use charset UCS2. Sms size with unicode: <b>70 characters</b>';
$_['clickatell_api_key']			        = 'API Key:';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Get your API keys and Token from <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />Sms size without unicode: <b>140 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['gatewayapi_api_key']		            = 'API Key:';
$_['gatewayapi_api_secret']		            = 'API Secret Key:';
$_['gatewayapi_token']		                = 'Token:';
$_['gatewayapi_sender']			            = 'Sender:';
$_['gatewayapi_help_sender']	            = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Get your Application ID and Token from <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Sms size without unicode: <b>612 characters</b><br />Sms size with unicode: <b>268 characters</b>';
$_['bulk_gate_app_id']		                = 'Application ID:';
$_['bulk_gate_token']		                = 'Token:';
$_['bulk_gate_sender']			            = 'Sender:';
$_['bulk_gate_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// TurboSms
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Get your Token from <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Sms size without unicode: <b>1521 characters</b><br />Sms size with unicode: <b>661 characters</b>';
$_['turbo_sms_token']		                = 'Token:';
$_['turbo_sms_sender']			            = 'Sender:';
$_['turbo_sms_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Get your API ID from <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Sms size without unicode: <b>160 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['sms_ru_api_id']		                    = 'API ID:';
$_['sms_ru_sender']			                = 'Sender:';
$_['sms_ru_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                    = 'Get your API private and public keys from <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Sms size without unicode: <b>160 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['e_pochta_public_key']		            = 'Public Key:';
$_['e_pochta_private_key']		            = 'Private Key:';
$_['e_pochta_sender']			            = 'Sender:';
$_['e_pochta_help_sender']	                = 'Get your Sender name from <a href="https://atomic.center/sms/senders" target="_blank">here</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Get your API key from <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Sms size without unicode: <b>140 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['red_sms_login']		                    = 'Login:';
$_['red_sms_api_key']		                = 'API Key:';
$_['red_sms_sender']			            = 'Sender:';
$_['red_sms_help_sender']	                = 'Non numeric sender size must be maximum 11 characters. For numeric sender size must be maximum 15 characters.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Get your API key from <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Sms size without unicode: <b>160 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['bytehand_api_key']		                = 'API Key:';
$_['bytehand_sender']			            = 'Sender:';
$_['bytehand_help_sender']	                = 'Get your Sender name from <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">here</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Get your API key from <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Sms size without unicode: <b>160 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['intel_tele_username']		            = 'Username:';
$_['intel_tele_api_key']		            = 'API Key:';
$_['intel_tele_sender']			            = 'Sender:';
$_['intel_tele_help_sender']	            = 'Get your Sender name from <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">here</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Get your API key from <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Sms size without unicode: <b>160 characters</b><br />Sms size with unicode: <b>70 characters</b>';
$_['digital_direct_api_key']		        = 'API Key:';
$_['digital_direct_sender']			        = 'Sender:';
$_['digital_direct_help_sender']	        = 'Get your Sender name from <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">here</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'You can get your Account SID and Auth token from <a href="https://www.twilio.com" target="_blank">Twilio</a>.<br /><br />SMS size without Unicode: <b>160 characters</b><br />SMS size with Unicode: <b>70 characters</b>';
$_['twilio_account_sid']                    = 'Account SID:';
$_['twilio_auth_token']                     = 'Auth token:';
$_['twilio_sender_phone']                   = 'Purchased number on twilio.com';

// Country codes
$_['countries']                             = [
    array("code" => "AF", "name" => "Afghanistan", "d_code" => "+93"),
    array("code" => "AL", "name" => "Albania", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Algeria", "d_code" => "+213"),
    array("code" => "AS", "name" => "American Samoa", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Andorra", "d_code" => "+376"),
    array("code" => "AO", "name" => "Angola", "d_code" => "+244"),
    array("code" => "AI", "name" => "Anguilla", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Antigua", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Argentina", "d_code" => "+54"),
    array("code" => "AM", "name" => "Armenia", "d_code" => "+374"),
    array("code" => "AW", "name" => "Aruba", "d_code" => "+297"),
    array("code" => "AU", "name" => "Australia", "d_code" => "+61"),
    array("code" => "AT", "name" => "Austria", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Azerbaijan", "d_code" => "+994"),
    array("code" => "BH", "name" => "Bahrain", "d_code" => "+973"),
    array("code" => "BD", "name" => "Bangladesh", "d_code" => "+880"),
    array("code" => "BB", "name" => "Barbados", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Belarus", "d_code" => "+375"),
    array("code" => "BE", "name" => "Belgium", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Belize", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Benin", "d_code" => "+229"),
    array("code" => "BM", "name" => "Bermuda", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Bhutan", "d_code" => "+975"),
    array("code" => "BO", "name" => "Bolivia", "d_code" => "+591"),
    array("code" => "BA", "name" => "Bosnia and Herzegovina", "d_code" => "+387"),
    array("code" => "BW", "name" => "Botswana", "d_code" => "+267"),
    array("code" => "BR", "name" => "Brazil", "d_code" => "+55"),
    array("code" => "IO", "name" => "British Indian Ocean Territory", "d_code" => "+246"),
    array("code" => "VG", "name" => "British Virgin Islands", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Brunei", "d_code" => "+673"),
    array("code" => "BG", "name" => "Bulgaria", "d_code" => "+359"),
    array("code" => "BF", "name" => "Burkina Faso", "d_code" => "+226"),
    array("code" => "MM", "name" => "Burma Myanmar", "d_code" => "+95"),
    array("code" => "BI", "name" => "Burundi", "d_code" => "+257"),
    array("code" => "KH", "name" => "Cambodia", "d_code" => "+855"),
    array("code" => "CM", "name" => "Cameroon", "d_code" => "+237"),
    array("code" => "CA", "name" => "Canada", "d_code" => "+1"),
    array("code" => "CV", "name" => "Cape Verde", "d_code" => "+238"),
    array("code" => "KY", "name" => "Cayman Islands", "d_code" => "+1345"),
    array("code" => "CF", "name" => "Central African Republic", "d_code" => "+236"),
    array("code" => "TD", "name" => "Chad", "d_code" => "+235"),
    array("code" => "CL", "name" => "Chile", "d_code" => "+56"),
    array("code" => "CN", "name" => "China", "d_code" => "+86"),
    array("code" => "CO", "name" => "Colombia", "d_code" => "+57"),
    array("code" => "KM", "name" => "Comoros", "d_code" => "+269"),
    array("code" => "CK", "name" => "Cook Islands", "d_code" => "+682"),
    array("code" => "CR", "name" => "Costa Rica", "d_code" => "+506"),
    array("code" => "CI", "name" => "Côte d'Ivoire", "d_code" => "+225"),
    array("code" => "HR", "name" => "Croatia", "d_code" => "+385"),
    array("code" => "CU", "name" => "Cuba", "d_code" => "+53"),
    array("code" => "CY", "name" => "Cyprus", "d_code" => "+357"),
    array("code" => "CZ", "name" => "Czech Republic", "d_code" => "+420"),
    array("code" => "CD", "name" => "Democratic Republic of Congo", "d_code" => "+243"),
    array("code" => "DK", "name" => "Denmark", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Djibouti", "d_code" => "+253"),
    array("code" => "DM", "name" => "Dominica", "d_code" => "+1767"),
    array("code" => "DO", "name" => "Dominican Republic", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Ecuador", "d_code" => "+593"),
    array("code" => "EG", "name" => "Egypt", "d_code" => "+20"),
    array("code" => "SV", "name" => "El Salvador", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Equatorial Guinea", "d_code" => "+240"),
    array("code" => "ER", "name" => "Eritrea", "d_code" => "+291"),
    array("code" => "EE", "name" => "Estonia", "d_code" => "+372"),
    array("code" => "ET", "name" => "Ethiopia", "d_code" => "+251"),
    array("code" => "FK", "name" => "Falkland Islands", "d_code" => "+500"),
    array("code" => "FO", "name" => "Faroe Islands", "d_code" => "+298"),
    array("code" => "FM", "name" => "Federated States of Micronesia", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Fiji", "d_code" => "+679"),
    array("code" => "FI", "name" => "Finland", "d_code" => "+358"),
    array("code" => "FR", "name" => "France", "d_code" => "+33"),
    array("code" => "GF", "name" => "French Guiana", "d_code" => "+594"),
    array("code" => "PF", "name" => "French Polynesia", "d_code" => "+689"),
    array("code" => "GA", "name" => "Gabon", "d_code" => "+241"),
    array("code" => "GE", "name" => "Georgia", "d_code" => "+995"),
    array("code" => "DE", "name" => "Germany", "d_code" => "+49"),
    array("code" => "GH", "name" => "Ghana", "d_code" => "+233"),
    array("code" => "GI", "name" => "Gibraltar", "d_code" => "+350"),
    array("code" => "GR", "name" => "Greece", "d_code" => "+30"),
    array("code" => "GL", "name" => "Greenland", "d_code" => "+299"),
    array("code" => "GD", "name" => "Grenada", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Guadeloupe", "d_code" => "+590"),
    array("code" => "GU", "name" => "Guam", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Guatemala", "d_code" => "+502"),
    array("code" => "GN", "name" => "Guinea", "d_code" => "+224"),
    array("code" => "GW", "name" => "Guinea-Bissau", "d_code" => "+245"),
    array("code" => "GY", "name" => "Guyana", "d_code" => "+592"),
    array("code" => "HT", "name" => "Haiti", "d_code" => "+509"),
    array("code" => "HN", "name" => "Honduras", "d_code" => "+504"),
    array("code" => "HK", "name" => "Hong Kong", "d_code" => "+852"),
    array("code" => "HU", "name" => "Hungary", "d_code" => "+36"),
    array("code" => "IS", "name" => "Iceland", "d_code" => "+354"),
    array("code" => "IN", "name" => "India", "d_code" => "+91"),
    array("code" => "ID", "name" => "Indonesia", "d_code" => "+62"),
    array("code" => "IR", "name" => "Iran", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Iraq", "d_code" => "+964"),
    array("code" => "IE", "name" => "Ireland", "d_code" => "+353"),
    array("code" => "IL", "name" => "Israel", "d_code" => "+972"),
    array("code" => "IT", "name" => "Italy", "d_code" => "+39"),
    array("code" => "JM", "name" => "Jamaica", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Japan", "d_code" => "+81"),
    array("code" => "JO", "name" => "Jordan", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Kazakhstan", "d_code" => "+7"),
    array("code" => "KE", "name" => "Kenya", "d_code" => "+254"),
    array("code" => "KI", "name" => "Kiribati", "d_code" => "+686"),
    array("code" => "KW", "name" => "Kuwait", "d_code" => "+965"),
    array("code" => "KG", "name" => "Kyrgyzstan", "d_code" => "+996"),
    array("code" => "LA", "name" => "Laos", "d_code" => "+856"),
    array("code" => "LV", "name" => "Latvia", "d_code" => "+371"),
    array("code" => "LB", "name" => "Lebanon", "d_code" => "+961"),
    array("code" => "LS", "name" => "Lesotho", "d_code" => "+266"),
    array("code" => "LR", "name" => "Liberia", "d_code" => "+231"),
    array("code" => "LY", "name" => "Libya", "d_code" => "+218"),
    array("code" => "LI", "name" => "Liechtenstein", "d_code" => "+423"),
    array("code" => "LT", "name" => "Lithuania", "d_code" => "+370"),
    array("code" => "LU", "name" => "Luxembourg", "d_code" => "+352"),
    array("code" => "MO", "name" => "Macau", "d_code" => "+853"),
    array("code" => "MK", "name" => "Macedonia", "d_code" => "+389"),
    array("code" => "MG", "name" => "Madagascar", "d_code" => "+261"),
    array("code" => "MW", "name" => "Malawi", "d_code" => "+265"),
    array("code" => "MY", "name" => "Malaysia", "d_code" => "+60"),
    array("code" => "MV", "name" => "Maldives", "d_code" => "+960"),
    array("code" => "ML", "name" => "Mali", "d_code" => "+223"),
    array("code" => "MT", "name" => "Malta", "d_code" => "+356"),
    array("code" => "MH", "name" => "Marshall Islands", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Martinique", "d_code" => "+596"),
    array("code" => "MR", "name" => "Mauritania", "d_code" => "+222"),
    array("code" => "MU", "name" => "Mauritius", "d_code" => "+230"),
    array("code" => "YT", "name" => "Mayotte", "d_code" => "+262"),
    array("code" => "MX", "name" => "Mexico", "d_code" => "+52"),
    array("code" => "MD", "name" => "Moldova", "d_code" => "+373"),
    array("code" => "MC", "name" => "Monaco", "d_code" => "+377"),
    array("code" => "MN", "name" => "Mongolia", "d_code" => "+976"),
    array("code" => "ME", "name" => "Montenegro", "d_code" => "+382"),
    array("code" => "MS", "name" => "Montserrat", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Morocco", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Mozambique", "d_code" => "+258"),
    array("code" => "NA", "name" => "Namibia", "d_code" => "+264"),
    array("code" => "NR", "name" => "Nauru", "d_code" => "+674"),
    array("code" => "NP", "name" => "Nepal", "d_code" => "+977"),
    array("code" => "NL", "name" => "Netherlands", "d_code" => "+31"),
    array("code" => "AN", "name" => "Netherlands Antilles", "d_code" => "+599"),
    array("code" => "NC", "name" => "New Caledonia", "d_code" => "+687"),
    array("code" => "NZ", "name" => "New Zealand", "d_code" => "+64"),
    array("code" => "NI", "name" => "Nicaragua", "d_code" => "+505"),
    array("code" => "NE", "name" => "Niger", "d_code" => "+227"),
    array("code" => "NG", "name" => "Nigeria", "d_code" => "+234"),
    array("code" => "NU", "name" => "Niue", "d_code" => "+683"),
    array("code" => "NF", "name" => "Norfolk Island", "d_code" => "+672"),
    array("code" => "KP", "name" => "North Korea", "d_code" => "+850"),
    array("code" => "MP", "name" => "Northern Mariana Islands", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Norway", "d_code" => "+47"),
    array("code" => "OM", "name" => "Oman", "d_code" => "+968"),
    array("code" => "PK", "name" => "Pakistan", "d_code" => "+92"),
    array("code" => "PW", "name" => "Palau", "d_code" => "+680"),
    array("code" => "PS", "name" => "Palestine", "d_code" => "+970"),
    array("code" => "PA", "name" => "Panama", "d_code" => "+507"),
    array("code" => "PG", "name" => "Papua New Guinea", "d_code" => "+675"),
    array("code" => "PY", "name" => "Paraguay", "d_code" => "+595"),
    array("code" => "PE", "name" => "Peru", "d_code" => "+51"),
    array("code" => "PH", "name" => "Philippines", "d_code" => "+63"),
    array("code" => "PL", "name" => "Poland", "d_code" => "+48"),
    array("code" => "PT", "name" => "Portugal", "d_code" => "+351"),
    array("code" => "PR", "name" => "Puerto Rico", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Qatar", "d_code" => "+974"),
    array("code" => "CG", "name" => "Republic of the Congo", "d_code" => "+242"),
    array("code" => "RE", "name" => "Réunion", "d_code" => "+262"),
    array("code" => "RO", "name" => "Romania", "d_code" => "+40"),
    array("code" => "RU", "name" => "Russia", "d_code" => "+7"),
    array("code" => "RW", "name" => "Rwanda", "d_code" => "+250"),
    array("code" => "SH", "name" => "Saint Helena", "d_code" => "+290"),
    array("code" => "KN", "name" => "Saint Kitts and Nevis", "d_code" => "+1869"),
    array("code" => "PM", "name" => "Saint Pierre and Miquelon", "d_code" => "+508"),
    array("code" => "VC", "name" => "Saint Vincent and the Grenadines", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Samoa", "d_code" => "+685"),
    array("code" => "SM", "name" => "San Marino", "d_code" => "+378"),
    array("code" => "ST", "name" => "São Tomé and Príncipe", "d_code" => "+239"),
    array("code" => "SA", "name" => "Saudi Arabia", "d_code" => "+966"),
    array("code" => "SN", "name" => "Senegal", "d_code" => "+221"),
    array("code" => "RS", "name" => "Serbia", "d_code" => "+381"),
    array("code" => "SC", "name" => "Seychelles", "d_code" => "+248"),
    array("code" => "SL", "name" => "Sierra Leone", "d_code" => "+232"),
    array("code" => "SG", "name" => "Singapore", "d_code" => "+65"),
    array("code" => "SK", "name" => "Slovakia", "d_code" => "+421"),
    array("code" => "SI", "name" => "Slovenia", "d_code" => "+386"),
    array("code" => "SB", "name" => "Solomon Islands", "d_code" => "+677"),
    array("code" => "SO", "name" => "Somalia", "d_code" => "+252"),
    array("code" => "ZA", "name" => "South Africa", "d_code" => "+27"),
    array("code" => "KR", "name" => "South Korea", "d_code" => "+82"),
    array("code" => "ES", "name" => "Spain", "d_code" => "+34"),
    array("code" => "LK", "name" => "Sri Lanka", "d_code" => "+94"),
    array("code" => "LC", "name" => "St. Lucia", "d_code" => "+1"),
    array("code" => "SD", "name" => "Sudan", "d_code" => "+249"),
    array("code" => "SR", "name" => "Suriname", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Swaziland", "d_code" => "+268"),
    array("code" => "SE", "name" => "Sweden", "d_code" => "+46"),
    array("code" => "CH", "name" => "Switzerland", "d_code" => "+41"),
    array("code" => "SY", "name" => "Syria", "d_code" => "+963"),
    array("code" => "TW", "name" => "Taiwan", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Tajikistan", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Tanzania", "d_code" => "+255"),
    array("code" => "TH", "name" => "Thailand", "d_code" => "+66"),
    array("code" => "BS", "name" => "The Bahamas", "d_code" => "+1242"),
    array("code" => "GM", "name" => "The Gambia", "d_code" => "+220"),
    array("code" => "TL", "name" => "Timor-Leste", "d_code" => "+670"),
    array("code" => "TG", "name" => "Togo", "d_code" => "+228"),
    array("code" => "TK", "name" => "Tokelau", "d_code" => "+690"),
    array("code" => "TO", "name" => "Tonga", "d_code" => "+676"),
    array("code" => "TT", "name" => "Trinidad and Tobago", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Tunisia", "d_code" => "+216"),
    array("code" => "TR", "name" => "Turkey", "d_code" => "+90"),
    array("code" => "TM", "name" => "Turkmenistan", "d_code" => "+993"),
    array("code" => "TC", "name" => "Turks and Caicos Islands", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Tuvalu", "d_code" => "+688"),
    array("code" => "UG", "name" => "Uganda", "d_code" => "+256"),
    array("code" => "UA", "name" => "Ukraine", "d_code" => "+380"),
    array("code" => "AE", "name" => "United Arab Emirates", "d_code" => "+971"),
    array("code" => "GB", "name" => "United Kingdom", "d_code" => "+44"),
    array("code" => "US", "name" => "United States", "d_code" => "+1"),
    array("code" => "UY", "name" => "Uruguay", "d_code" => "+598"),
    array("code" => "VI", "name" => "US Virgin Islands", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Uzbekistan", "d_code" => "+998"),
    array("code" => "VU", "name" => "Vanuatu", "d_code" => "+678"),
    array("code" => "VA", "name" => "Vatican City", "d_code" => "+39"),
    array("code" => "VE", "name" => "Venezuela", "d_code" => "+58"),
    array("code" => "VN", "name" => "Vietnam", "d_code" => "+84"),
    array("code" => "WF", "name" => "Wallis and Futuna", "d_code" => "+681"),
    array("code" => "YE", "name" => "Yemen", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Zambia", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Zimbabwe", "d_code" => "+263")
];