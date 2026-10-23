<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> SMS Benachrichtigungen Sender <span style="font-size:12px; color:#999">[1.9.4] von <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'SMS Benachrichtigungen Sender';
$_['text_module']                           = 'Erweiterungen';
$_['text_success']                          = 'Erfolg: Sie haben das Modul <strong>SMS Benachrichtigungen Sender</strong> geändert!';
$_['text_error']                            = 'Sie haben keine Berechtigung, dieses Modul zu bearbeiten!';

// Allgemein
$_['general_title']                         = 'Allgemein';
$_['general_status']                        = 'SMS-Status:';
$_['general_api']                           = 'SMS-API:';

$_['error_permission']                      = 'Warnung: Sie haben keine Berechtigung, das Modul SMS Benachrichtigungen Sender zu ändern!';
$_['error_input_form']                      = 'Bitte überprüfen Sie das Formular auf Fehler!';
$_['error_requirements']                    = 'Um einen der SMS-Dienste zu verwenden, müssen Sie alle Felder im Tab mit dem Dienst ausfüllen!';

$_['subject_text']                          = 'Betreff';
$_['text_yes']                              = 'Ja';
$_['text_no']                               = 'Nein';
$_['text_enabled']                          = 'Aktiviert';
$_['text_disabled']                         = 'Deaktiviert';
$_['text_info']                             = 'Information:';
$_['text_buy_quick_order']                  = 'Schnellbestellung kaufen';

$_['button_save']                           = 'Speichern';
$_['button_cancel']				            = 'Abbrechen';
$_['button_remove']				            = 'Entfernen';
$_['button_add']				            = 'Hinzufügen';

$_['save_changes']				            = 'Änderungen speichern';

// Ereignisse
$_['events_title']                          = 'Ereignisse';
$_['text_status']                           = 'Status:';
$_['order_status']                          = 'Bestellstatus:';
$_['order_message']                         = 'Nachricht:';
$_['order_characters']                      = 'Zeichen:';
$_['order_sms_counter']                     = 'SMS-Zähler:';
$_['send_sms_to_customers']                 = 'SMS an Kunden senden';
$_['send_sms_to_owner']                     = 'SMS an den Geschäftsinhaber senden';
$_['on_new_quick_order_placed']             = 'Bei neuer platzierten Schnellbestellung';
$_['on_new_order_placed']                   = 'Bei neuer Bestellung';
$_['on_order_status_change']                = 'Bei Änderung des Bestellstatus';
$_['on_successful_signup']                  = 'Bei erfolgreicher Anmeldung';
$_['help_c_m_on_new_quick_order_placed']    = 'Kurzcodes:<br/>{QuickOrderID} - Schnellbestellungs-ID<br/>{SiteName} - Name des Geschäfts<br/>{ProductID} - Produkt-ID<br/>{ProductAmount} - Menge des Produkts<br/>{ProductName} - Produktname<br/>{Price} - Gesamtpreis<br/>{PageUrl} - Produkt-Link-URL<br/>{Name} - Kundenname<br/>{Email} - Kunden-E-Mail<br/>{Phone} - Kunden-Telefonnummer<br/>{Comment} - Kundenkommentar';
$_['help_c_m_on_new_order_placed']          = 'Kurzcodes:<br/><i>* Beachten Sie bitte, dass diese Kurzcodes zur Laufzeit durch die tatsächlichen Bestellinformationen ersetzt werden.</i><br/><br/>{SiteName} - Name des Geschäfts<br/>{OrderID} - Bestell-ID<br/>{CartTotal} - Warenkorbgesamtsumme<br/>{ShippingAddress} - Lieferadresse<br/>{ShippingMethod} - Versandart<br/>{PaymentAddress} - Rechnungsadresse<br/>{PaymentMethod} - Zahlungsmethode';
$_['help_c_o_on_order_status_change']       = 'Wählen Sie aus, bei welchen Änderungen des Bestellstatus der Kunde per SMS benachrichtigt werden soll';
$_['help_c_m_on_order_status_change']       = 'Kurzcodes:<br/>{QuickOrderID} - Schnellbestellungs-ID<br/>{SiteName} - Name des Geschäfts<br/>{ProductID} - Produkt-ID<br/>{ProductAmount} - Menge des Produkts<br/>{ProductName} - Produktname<br/>{Price} - Gesamtpreis<br/>{PageUrl} - Produkt-Link-URL<br/>{Name} - Kundenname<br/>{Email} - Kunden-E-Mail<br/>{Phone} - Kunden-Telefonnummer<br/>{Comment} - Kundenkommentar';
$_['help_c_m_on_successful_signup']         = 'Kurzcodes:<br/>{SiteName} - Name des Geschäfts<br/>{CustomerName} - Kundenname';
$_['help_a_m_on_new_quick_order_placed']    = 'Kurzcodes:<br/>{QuickOrderID} - Schnellbestellungs-ID<br/>{SiteName} - Name des Geschäfts<br/>{ProductID} - Produkt-ID<br/>{ProductAmount} - Menge des Produkts<br/>{ProductName} - Produktname<br/>{Price} - Gesamtpreis<br/>{PageUrl} - Produkt-Link-URL<br/>{Name} - Kundenname<br/>{Email} - Kunden-E-Mail<br/>{Phone} - Kunden-Telefonnummer<br/>{Comment} - Kundenkommentar';
$_['help_a_m_on_new_order_placed']          = 'Kurzcodes:<br/>{SiteName} - Name des Geschäfts<br/>{OrderID} - Bestell-ID<br/>{CartTotal} - Warenkorbgesamtsumme';
$_['help_a_m_on_successful_signup']         = 'Kurzcodes:<br/>{SiteName} - Name des Geschäfts<br/>{CustomerName} - Kundenname';
$_['c_m_on_new_quick_order_placed']         = 'Vielen Dank für Ihre Bestellung bei {SiteName}. Ihre Schnellbestellungs-ID lautet: {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Vielen Dank für Ihre Bestellung bei {SiteName}. Ihre Bestell-ID lautet: {OrderID}.';
$_['c_m_on_order_status_change']            = 'Ihre Bestellung ({OrderID}) bei {SiteName} wurde auf den folgenden Status aktualisiert: {StatusTo}.';
$_['c_m_on_successful_signup']              = 'Hallo, {CustomerName}! Vielen Dank für die Registrierung bei {StoreName}. Viel Spaß in unserem Shop!';
$_['a_m_on_new_quick_order_placed']         = 'Jemand hat etwas aus Ihrem Geschäft bestellt. Schnellbestellungs-ID: {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Jemand hat etwas aus Ihrem Geschäft bestellt. Die Bestell-ID lautet: {OrderID}.';
$_['a_m_on_successful_signup']              = 'Hallo Admin! Der Kunde {CustomerName} hat sich in Ihrem Geschäft registriert!';

// Einstellungen
$_['settings_title']                        = 'Einstellungen';
$_['settings_sms_unicode']                  = 'SMS mit Unicode:';
$_['settings_help_sms_unicode']             = 'Die maximale Größe der SMS mit Unicode ist kleiner als ohne.';
$_['settings_admins_phones']                = 'Telefonnummern der Administratoren:';
$_['settings_help_admins_phones']           = 'Die hinzugefügten Telefonnummern werden für Admin-Benachrichtigungen verwendet.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Holen Sie sich Ihren API-Schlüssel von <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell verwendet das Zeichensatz UCS2. SMS-Größe mit Unicode: <b>70 Zeichen</b>';
$_['clickatell_api_key']			        = 'API-Schlüssel:';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Holen Sie sich Ihre API-Schlüssel und den Token von <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />SMS-Größe ohne Unicode: <b>140 Zeichen</b><br />SMS-Größe mit Unicode: <b>70 Zeichen</b>';
$_['gatewayapi_api_key']		            = 'API-Schlüssel:';
$_['gatewayapi_api_secret']		            = 'API-Geheimschlüssel:';
$_['gatewayapi_token']		                = 'Token:';
$_['gatewayapi_sender']			            = 'Absender:';
$_['gatewayapi_help_sender']	            = 'Die Größe des nicht numerischen Absenders darf maximal 11 Zeichen betragen. Für den numerischen Absender darf die Größe maximal 15 Zeichen betragen.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Holen Sie sich Ihre Anwendungs-ID und Token von <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Sms-Größe ohne Unicode: <b>612 Zeichen</b><br />Sms-Größe mit Unicode: <b>268 Zeichen</b>';
$_['bulk_gate_app_id']		                = 'Anwendungs-ID:';
$_['bulk_gate_token']		                = 'Token:';
$_['bulk_gate_sender']			            = 'Sender:';
$_['bulk_gate_help_sender']	                = 'Die Größe des nicht numerischen Absenders darf maximal 11 Zeichen betragen. Für den numerischen Absender darf die Größe maximal 15 Zeichen betragen.';

// TurboSms
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Holen Sie sich Ihr Token von <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Sms-Größe ohne Unicode: <b>1521 Zeichen</b><br />Sms-Größe mit Unicode: <b>661 Zeichen</b>';
$_['turbo_sms_token']		                = 'Token:';
$_['turbo_sms_sender']			            = 'Sender:';
$_['turbo_sms_help_sender']	                = 'Die Größe des nicht numerischen Absenders darf maximal 11 Zeichen betragen. Für den numerischen Absender darf die Größe maximal 15 Zeichen betragen.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Holen Sie sich Ihre API-ID von <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Sms-Größe ohne Unicode: <b>160 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['sms_ru_api_id']		                    = 'API-ID:';
$_['sms_ru_sender']			                = 'Sender:';
$_['sms_ru_help_sender']	                = 'Die Größe des nicht numerischen Absenders darf maximal 11 Zeichen betragen. Für den numerischen Absender darf die Größe maximal 15 Zeichen betragen.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                     = 'Holen Sie sich Ihre API-Privat- und -Öffentlichen Schlüssel von <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Sms-Größe ohne Unicode: <b>160 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['e_pochta_public_key']		            = 'Öffentlicher Schlüssel:';
$_['e_pochta_private_key']		            = 'Privater Schlüssel:';
$_['e_pochta_sender']			            = 'Sender:';
$_['e_pochta_help_sender']	                = 'Holen Sie sich Ihren Sender-Namen von <a href="https://atomic.center/sms/senders" target="_blank">hier</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Holen Sie sich Ihren API-Schlüssel von <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Sms-Größe ohne Unicode: <b>140 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['red_sms_login']		                    = 'Login:';
$_['red_sms_api_key']		                = 'API-Schlüssel:';
$_['red_sms_sender']			            = 'Sender:';
$_['red_sms_help_sender']	                = 'Die Größe des nicht numerischen Absenders darf maximal 11 Zeichen betragen. Für den numerischen Absender darf die Größe maximal 15 Zeichen betragen.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Holen Sie sich Ihren API-Schlüssel von <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Sms-Größe ohne Unicode: <b>160 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['bytehand_api_key']		                = 'API-Schlüssel:';
$_['bytehand_sender']			            = 'Sender:';
$_['bytehand_help_sender']	                = 'Holen Sie sich Ihren Sender-Namen von <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">hier</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Holen Sie sich Ihren API-Schlüssel von <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Sms-Größe ohne Unicode: <b>160 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['intel_tele_username']		            = 'Benutzername:';
$_['intel_tele_api_key']		            = 'API-Schlüssel:';
$_['intel_tele_sender']			            = 'Sender:';
$_['intel_tele_help_sender']	            = 'Holen Sie sich Ihren Sender-Namen von <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">hier</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Holen Sie sich Ihren API-Schlüssel von <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Sms-Größe ohne Unicode: <b>160 Zeichen</b><br />Sms-Größe mit Unicode: <b>70 Zeichen</b>';
$_['digital_direct_api_key']		        = 'API-Schlüssel:';
$_['digital_direct_sender']			        = 'Sender:';
$_['digital_direct_help_sender']	        = 'Holen Sie sich Ihren Sender-Namen von <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">hier</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'Sie können Ihre Account SID und Auth-Token von <a href="https://www.twilio.com" target="_blank">Twilio</a> erhalten.<br /><br />SMS-Größe ohne Unicode: <b>160 Zeichen</b><br />SMS-Größe mit Unicode: <b>70 Zeichen</b>';
$_['twilio_account_sid']                    = 'Account SID:';
$_['twilio_auth_token']                     = 'Auth-Token:';
$_['twilio_sender_phone']                   = 'Gekauftes Nummer auf twilio.com';

// Ländercodes
$_['countries']                             = [
    array("code" => "AF", "name" => "Afghanistan", "d_code" => "+93"),
    array("code" => "AL", "name" => "Albanien", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Algerien", "d_code" => "+213"),
    array("code" => "AS", "name" => "Amerikanisch-Samoa", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Andorra", "d_code" => "+376"),
    array("code" => "AO", "name" => "Angola", "d_code" => "+244"),
    array("code" => "AI", "name" => "Anguilla", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Antigua", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Argentinien", "d_code" => "+54"),
    array("code" => "AM", "name" => "Armenien", "d_code" => "+374"),
    array("code" => "AW", "name" => "Aruba", "d_code" => "+297"),
    array("code" => "AU", "name" => "Australien", "d_code" => "+61"),
    array("code" => "AT", "name" => "Österreich", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Aserbaidschan", "d_code" => "+994"),
    array("code" => "BH", "name" => "Bahrain", "d_code" => "+973"),
    array("code" => "BD", "name" => "Bangladesch", "d_code" => "+880"),
    array("code" => "BB", "name" => "Barbados", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Weißrussland", "d_code" => "+375"),
    array("code" => "BE", "name" => "Belgien", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Belize", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Benin", "d_code" => "+229"),
    array("code" => "BM", "name" => "Bermuda", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Bhutan", "d_code" => "+975"),
    array("code" => "BO", "name" => "Bolivien", "d_code" => "+591"),
    array("code" => "BA", "name" => "Bosnien und Herzegowina", "d_code" => "+387"),
    array("code" => "BW", "name" => "Botswana", "d_code" => "+267"),
    array("code" => "BR", "name" => "Brasilien", "d_code" => "+55"),
    array("code" => "IO", "name" => "Britisches Territorium im Indischen Ozean", "d_code" => "+246"),
    array("code" => "VG", "name" => "Britische Jungferninseln", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Brunei", "d_code" => "+673"),
    array("code" => "BG", "name" => "Bulgarien", "d_code" => "+359"),
    array("code" => "BF", "name" => "Burkina Faso", "d_code" => "+226"),
    array("code" => "MM", "name" => "Burma Myanmar", "d_code" => "+95"),
    array("code" => "BI", "name" => "Burundi", "d_code" => "+257"),
    array("code" => "KH", "name" => "Kambodscha", "d_code" => "+855"),
    array("code" => "CM", "name" => "Kamerun", "d_code" => "+237"),
    array("code" => "CA", "name" => "Kanada", "d_code" => "+1"),
    array("code" => "CV", "name" => "Kap Verde", "d_code" => "+238"),
    array("code" => "KY", "name" => "Kaimaninseln", "d_code" => "+1345"),
    array("code" => "CF", "name" => "Zentralafrikanische Republik", "d_code" => "+236"),
    array("code" => "TD", "name" => "Tschad", "d_code" => "+235"),
    array("code" => "CL", "name" => "Chile", "d_code" => "+56"),
    array("code" => "CN", "name" => "China", "d_code" => "+86"),
    array("code" => "CO", "name" => "Kolumbien", "d_code" => "+57"),
    array("code" => "KM", "name" => "Komoren", "d_code" => "+269"),
    array("code" => "CK", "name" => "Cookinseln", "d_code" => "+682"),
    array("code" => "CR", "name" => "Costa Rica", "d_code" => "+506"),
    array("code" => "CI", "name" => "Elfenbeinküste", "d_code" => "+225"),
    array("code" => "HR", "name" => "Kroatien", "d_code" => "+385"),
    array("code" => "CU", "name" => "Kuba", "d_code" => "+53"),
    array("code" => "CY", "name" => "Zypern", "d_code" => "+357"),
    array("code" => "CZ", "name" => "Tschechische Republik", "d_code" => "+420"),
    array("code" => "CD", "name" => "Demokratische Republik Kongo", "d_code" => "+243"),
    array("code" => "DK", "name" => "Dänemark", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Dschibuti", "d_code" => "+253"),
    array("code" => "DM", "name" => "Dominica", "d_code" => "+1767"),
    array("code" => "DO", "name" => "Dominikanische Republik", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Ecuador", "d_code" => "+593"),
    array("code" => "EG", "name" => "Ägypten", "d_code" => "+20"),
    array("code" => "SV", "name" => "El Salvador", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Äquatorialguinea", "d_code" => "+240"),
    array("code" => "ER", "name" => "Eritrea", "d_code" => "+291"),
    array("code" => "EE", "name" => "Estland", "d_code" => "+372"),
    array("code" => "ET", "name" => "Äthiopien", "d_code" => "+251"),
    array("code" => "FK", "name" => "Falklandinseln", "d_code" => "+500"),
    array("code" => "FO", "name" => "Färöer", "d_code" => "+298"),
    array("code" => "FM", "name" => "Föderierte Staaten von Mikronesien", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Fidschi", "d_code" => "+679"),
    array("code" => "FI", "name" => "Finnland", "d_code" => "+358"),
    array("code" => "FR", "name" => "Frankreich", "d_code" => "+33"),
    array("code" => "GF", "name" => "Französisch-Guayana", "d_code" => "+594"),
    array("code" => "PF", "name" => "Französisch-Polynesien", "d_code" => "+689"),
    array("code" => "GA", "name" => "Gabun", "d_code" => "+241"),
    array("code" => "GE", "name" => "Georgien", "d_code" => "+995"),
    array("code" => "DE", "name" => "Deutschland", "d_code" => "+49"),
    array("code" => "GH", "name" => "Ghana", "d_code" => "+233"),
    array("code" => "GI", "name" => "Gibraltar", "d_code" => "+350"),
    array("code" => "GR", "name" => "Griechenland", "d_code" => "+30"),
    array("code" => "GL", "name" => "Grönland", "d_code" => "+299"),
    array("code" => "GD", "name" => "Grenada", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Guadeloupe", "d_code" => "+590"),
    array("code" => "GU", "name" => "Guam", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Guatemala", "d_code" => "+502"),
    array("code" => "GN", "name" => "Guinea", "d_code" => "+224"),
    array("code" => "GW", "name" => "Guinea-Bissau", "d_code" => "+245"),
    array("code" => "GY", "name" => "Guyana", "d_code" => "+592"),
    array("code" => "HT", "name" => "Haiti", "d_code" => "+509"),
    array("code" => "HN", "name" => "Honduras", "d_code" => "+504"),
    array("code" => "HK", "name" => "Hongkong", "d_code" => "+852"),
    array("code" => "HU", "name" => "Ungarn", "d_code" => "+36"),
    array("code" => "IS", "name" => "Island", "d_code" => "+354"),
    array("code" => "IN", "name" => "Indien", "d_code" => "+91"),
    array("code" => "ID", "name" => "Indonesien", "d_code" => "+62"),
    array("code" => "IR", "name" => "Iran", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Irak", "d_code" => "+964"),
    array("code" => "IE", "name" => "Irland", "d_code" => "+353"),
    array("code" => "IL", "name" => "Israel", "d_code" => "+972"),
    array("code" => "IT", "name" => "Italien", "d_code" => "+39"),
    array("code" => "JM", "name" => "Jamaika", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Japan", "d_code" => "+81"),
    array("code" => "JO", "name" => "Jordanien", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Kasachstan", "d_code" => "+7"),
    array("code" => "KE", "name" => "Kenia", "d_code" => "+254"),
    array("code" => "KI", "name" => "Kiribati", "d_code" => "+686"),
    array("code" => "KW", "name" => "Kuwait", "d_code" => "+965"),
    array("code" => "KG", "name" => "Kirgisistan", "d_code" => "+996"),
    array("code" => "LA", "name" => "Laos", "d_code" => "+856"),
    array("code" => "LV", "name" => "Lettland", "d_code" => "+371"),
    array("code" => "LB", "name" => "Libanon", "d_code" => "+961"),
    array("code" => "LS", "name" => "Lesotho", "d_code" => "+266"),
    array("code" => "LR", "name" => "Liberia", "d_code" => "+231"),
    array("code" => "LY", "name" => "Libyen", "d_code" => "+218"),
    array("code" => "LI", "name" => "Liechtenstein", "d_code" => "+423"),
    array("code" => "LT", "name" => "Litauen", "d_code" => "+370"),
    array("code" => "LU", "name" => "Luxemburg", "d_code" => "+352"),
    array("code" => "MO", "name" => "Macau", "d_code" => "+853"),
    array("code" => "MK", "name" => "Mazedonien", "d_code" => "+389"),
    array("code" => "MG", "name" => "Madagaskar", "d_code" => "+261"),
    array("code" => "MW", "name" => "Malawi", "d_code" => "+265"),
    array("code" => "MY", "name" => "Malaysia", "d_code" => "+60"),
    array("code" => "MV", "name" => "Malediven", "d_code" => "+960"),
    array("code" => "ML", "name" => "Mali", "d_code" => "+223"),
    array("code" => "MT", "name" => "Malta", "d_code" => "+356"),
    array("code" => "MH", "name" => "Marshallinseln", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Martinique", "d_code" => "+596"),
    array("code" => "MR", "name" => "Mauretanien", "d_code" => "+222"),
    array("code" => "MU", "name" => "Mauritius", "d_code" => "+230"),
    array("code" => "YT", "name" => "Mayotte", "d_code" => "+262"),
    array("code" => "MX", "name" => "Mexiko", "d_code" => "+52"),
    array("code" => "MD", "name" => "Moldawien", "d_code" => "+373"),
    array("code" => "MC", "name" => "Monaco", "d_code" => "+377"),
    array("code" => "MN", "name" => "Mongolei", "d_code" => "+976"),
    array("code" => "ME", "name" => "Montenegro", "d_code" => "+382"),
    array("code" => "MS", "name" => "Montserrat", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Marokko", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Mosambik", "d_code" => "+258"),
    array("code" => "NA", "name" => "Namibia", "d_code" => "+264"),
    array("code" => "NR", "name" => "Nauru", "d_code" => "+674"),
    array("code" => "NP", "name" => "Nepal", "d_code" => "+977"),
    array("code" => "NL", "name" => "Niederlande", "d_code" => "+31"),
    array("code" => "AN", "name" => "Niederländische Antillen", "d_code" => "+599"),
    array("code" => "NC", "name" => "Neukaledonien", "d_code" => "+687"),
    array("code" => "NZ", "name" => "Neuseeland", "d_code" => "+64"),
    array("code" => "NI", "name" => "Nicaragua", "d_code" => "+505"),
    array("code" => "NE", "name" => "Niger", "d_code" => "+227"),
    array("code" => "NG", "name" => "Nigeria", "d_code" => "+234"),
    array("code" => "NU", "name" => "Niue", "d_code" => "+683"),
    array("code" => "NF", "name" => "Norfolkinsel", "d_code" => "+672"),
    array("code" => "KP", "name" => "Nordkorea", "d_code" => "+850"),
    array("code" => "MP", "name" => "Nördliche Marianen", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Norwegen", "d_code" => "+47"),
    array("code" => "OM", "name" => "Oman", "d_code" => "+968"),
    array("code" => "PK", "name" => "Pakistan", "d_code" => "+92"),
    array("code" => "PW", "name" => "Palau", "d_code" => "+680"),
    array("code" => "PS", "name" => "Palästina", "d_code" => "+970"),
    array("code" => "PA", "name" => "Panama", "d_code" => "+507"),
    array("code" => "PG", "name" => "Papua-Neuguinea", "d_code" => "+675"),
    array("code" => "PY", "name" => "Paraguay", "d_code" => "+595"),
    array("code" => "PE", "name" => "Peru", "d_code" => "+51"),
    array("code" => "PH", "name" => "Philippinen", "d_code" => "+63"),
    array("code" => "PL", "name" => "Polen", "d_code" => "+48"),
    array("code" => "PT", "name" => "Portugal", "d_code" => "+351"),
    array("code" => "PR", "name" => "Puerto Rico", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Katar", "d_code" => "+974"),
    array("code" => "CG", "name" => "Republik Kongo", "d_code" => "+242"),
    array("code" => "RE", "name" => "Réunion", "d_code" => "+262"),
    array("code" => "RO", "name" => "Rumänien", "d_code" => "+40"),
    array("code" => "RU", "name" => "Russland", "d_code" => "+7"),
    array("code" => "RW", "name" => "Ruanda", "d_code" => "+250"),
    array("code" => "SH", "name" => "St. Helena", "d_code" => "+290"),
    array("code" => "KN", "name" => "St. Kitts und Nevis", "d_code" => "+1869"),
    array("code" => "PM", "name" => "St. Pierre und Miquelon", "d_code" => "+508"),
    array("code" => "VC", "name" => "St. Vincent und die Grenadinen", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Samoa", "d_code" => "+685"),
    array("code" => "SM", "name" => "San Marino", "d_code" => "+378"),
    array("code" => "ST", "name" => "São Tomé und Príncipe", "d_code" => "+239"),
    array("code" => "SA", "name" => "Saudi-Arabien", "d_code" => "+966"),
    array("code" => "SN", "name" => "Senegal", "d_code" => "+221"),
    array("code" => "RS", "name" => "Serbien", "d_code" => "+381"),
    array("code" => "SC", "name" => "Seychellen", "d_code" => "+248"),
    array("code" => "SL", "name" => "Sierra Leone", "d_code" => "+232"),
    array("code" => "SG", "name" => "Singapur", "d_code" => "+65"),
    array("code" => "SK", "name" => "Slowakei", "d_code" => "+421"),
    array("code" => "SI", "name" => "Slowenien", "d_code" => "+386"),
    array("code" => "SB", "name" => "Salomonen", "d_code" => "+677"),
    array("code" => "SO", "name" => "Somalia", "d_code" => "+252"),
    array("code" => "ZA", "name" => "Südafrika", "d_code" => "+27"),
    array("code" => "KR", "name" => "Südkorea", "d_code" => "+82"),
    array("code" => "ES", "name" => "Spanien", "d_code" => "+34"),
    array("code" => "LK", "name" => "Sri Lanka", "d_code" => "+94"),
    array("code" => "LC", "name" => "St. Lucia", "d_code" => "+1"),
    array("code" => "SD", "name" => "Sudan", "d_code" => "+249"),
    array("code" => "SR", "name" => "Suriname", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Swasiland", "d_code" => "+268"),
    array("code" => "SE", "name" => "Schweden", "d_code" => "+46"),
    array("code" => "CH", "name" => "Schweiz", "d_code" => "+41"),
    array("code" => "SY", "name" => "Syrien", "d_code" => "+963"),
    array("code" => "TW", "name" => "Taiwan", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Tadschikistan", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Tansania", "d_code" => "+255"),
    array("code" => "TH", "name" => "Thailand", "d_code" => "+66"),
    array("code" => "BS", "name" => "Die Bahamas", "d_code" => "+1242"),
    array("code" => "GM", "name" => "Gambia", "d_code" => "+220"),
    array("code" => "TL", "name" => "Timor-Leste", "d_code" => "+670"),
    array("code" => "TG", "name" => "Togo", "d_code" => "+228"),
    array("code" => "TK", "name" => "Tokelau", "d_code" => "+690"),
    array("code" => "TO", "name" => "Tonga", "d_code" => "+676"),
    array("code" => "TT", "name" => "Trinidad und Tobago", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Tunesien", "d_code" => "+216"),
    array("code" => "TR", "name" => "Türkei", "d_code" => "+90"),
    array("code" => "TM", "name" => "Turkmenistan", "d_code" => "+993"),
    array("code" => "TC", "name" => "Turks- und Caicosinseln", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Tuvalu", "d_code" => "+688"),
    array("code" => "UG", "name" => "Uganda", "d_code" => "+256"),
    array("code" => "UA", "name" => "Ukraine", "d_code" => "+380"),
    array("code" => "AE", "name" => "Vereinigte Arabische Emirate", "d_code" => "+971"),
    array("code" => "GB", "name" => "Vereinigtes Königreich", "d_code" => "+44"),
    array("code" => "US", "name" => "Vereinigte Staaten", "d_code" => "+1"),
    array("code" => "UY", "name" => "Uruguay", "d_code" => "+598"),
    array("code" => "VI", "name" => "Amerikanische Jungferninseln", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Usbekistan", "d_code" => "+998"),
    array("code" => "VU", "name" => "Vanuatu", "d_code" => "+678"),
    array("code" => "VA", "name" => "Vatikanstadt", "d_code" => "+39"),
    array("code" => "VE", "name" => "Venezuela", "d_code" => "+58"),
    array("code" => "VN", "name" => "Vietnam", "d_code" => "+84"),
    array("code" => "WF", "name" => "Wallis und Futuna", "d_code" => "+681"),
    array("code" => "YE", "name" => "Jemen", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Sambia", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Simbabwe", "d_code" => "+263")
];