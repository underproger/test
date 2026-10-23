<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> SMS Notifications Sender <span style="font-size:12px; color:#999">[1.9.4] par <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'SMS Notifications Sender';
$_['text_module']                           = 'Extensions';
$_['text_success']                          = 'Succès : vous avez modifié le module <strong>SMS Notifications Sender</strong> !';
$_['text_error']                            = 'Vous n\'avez pas les autorisations pour modifier ce module !';

// General
$_['general_title']                         = 'Général';
$_['general_status']                        = 'Statut du SMS :';
$_['general_api']                           = 'API SMS :';

$_['error_permission']                      = 'Attention : vous n\'avez pas l\'autorisation de modifier le module SMS Notifications Sender !';
$_['error_input_form']                      = 'Veuillez vérifier le formulaire pour les erreurs !';
$_['error_requirements']                    = 'Pour utiliser l\'un des services SMS, vous devez remplir tous les champs dans l\'onglet du service !';

$_['subject_text']                          = 'Sujet';
$_['text_yes']                              = 'Oui';
$_['text_no']                               = 'Non';
$_['text_enabled']                          = 'Activé';
$_['text_disabled']                         = 'Désactivé';
$_['text_info']                             = 'Information :';
$_['text_buy_quick_order']                  = 'Acheter une commande rapide';

$_['button_save']                           = 'Enregistrer';
$_['button_cancel']				            = 'Annuler';
$_['button_remove']				            = 'Supprimer';
$_['button_add']				            = 'Ajouter';

$_['save_changes']				            = 'Enregistrer les modifications';

// Events
$_['events_title']                          = 'Événements';
$_['text_status']                           = 'Statut :';
$_['order_status']                          = 'Statut de la commande :';
$_['order_message']                         = 'Message :';
$_['order_characters']                      = 'Caractères :';
$_['order_sms_counter']                     = 'Compteur SMS :';
$_['send_sms_to_customers']                 = 'Envoyer un SMS au client';
$_['send_sms_to_owner']                     = 'Envoyer un SMS au propriétaire du magasin';
$_['on_new_quick_order_placed']             = 'Lorsqu\'une nouvelle commande rapide est passée';
$_['on_new_order_placed']                   = 'Lorsqu\'une nouvelle commande est passée';
$_['on_order_status_change']                = 'Lorsqu\'un changement de statut de commande se produit';
$_['on_successful_signup']                  = 'Lorsqu\'une inscription réussie se produit';
$_['help_c_m_on_new_quick_order_placed']    = 'Codes courts :<br/>{QuickOrderID} - ID de commande rapide<br/>{SiteName} - Nom du magasin<br/>{ProductID} - ID du produit<br/>{ProductAmount} - Montant du produit<br/>{ProductName} - Nom du produit<br/>{Price} - Prix total<br/>{PageUrl} - URL du lien du produit<br/>{Name} - Nom du client<br/>{Email} - E-mail du client<br/>{Phone} - Numéro de téléphone du client<br/>{Comment} - Commentaire du client';
$_['help_c_m_on_new_order_placed']          = 'Codes courts :<br/><i>* Veuillez noter que ces codes courts seront remplacés par les informations de commande réelles lors de l\'exécution.</i><br/><br/>{SiteName} - Nom du magasin<br/>{OrderID} - ID de commande<br/>{CartTotal} - Total du panier<br/>{ShippingAddress} - Adresse de livraison<br/>{ShippingMethod} - Mode de livraison<br/>{PaymentAddress} - Adresse de paiement<br/>{PaymentMethod} - Mode de paiement';
$_['help_c_o_on_order_status_change']       = 'Choisissez sur quels changements de statut de commande vous souhaitez que le client soit notifié par SMS';
$_['help_c_m_on_order_status_change']       = 'Codes courts :<br/>{QuickOrderID} - ID de commande rapide<br/>{SiteName} - Nom du magasin<br/>{ProductID} - ID du produit<br/>{ProductAmount} - Montant du produit<br/>{ProductName} - Nom du produit<br/>{Price} - Prix total<br/>{PageUrl} - URL du lien du produit<br/>{Name} - Nom du client<br/>{Email} - E-mail du client<br/>{Phone} - Numéro de téléphone du client<br/>{Comment} - Commentaire du client';
$_['help_c_m_on_successful_signup']         = 'Codes courts :<br/>{SiteName} - Nom du magasin<br/>{CustomerName} - Nom du client';
$_['help_a_m_on_new_quick_order_placed']    = 'Codes courts :<br/>{QuickOrderID} - ID de commande rapide<br/>{SiteName} - Nom du magasin<br/>{ProductID} - ID du produit<br/>{ProductAmount} - Montant du produit<br/>{ProductName} - Nom du produit<br/>{Price} - Prix total<br/>{PageUrl} - URL du lien du produit<br/>{Name} - Nom du client<br/>{Email} - E-mail du client<br/>{Phone} - Numéro de téléphone du client<br/>{Comment} - Commentaire du client';
$_['help_a_m_on_new_order_placed']          = 'Codes courts :<br/>{SiteName} - Nom du magasin<br/>{OrderID} - ID de commande<br/>{CartTotal} - Total du panier';
$_['help_a_m_on_successful_signup']         = 'Codes courts :<br/>{SiteName} - Nom du magasin<br/>{CustomerName} - Nom du client';
$_['c_m_on_new_quick_order_placed']         = 'Merci d\'avoir commandé chez {SiteName}. Votre ID de commande rapide est : {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Merci d\'avoir commandé chez {SiteName}. Votre ID de commande est : {OrderID}.';
$_['c_m_on_order_status_change']            = 'Votre commande ({OrderID}) chez {SiteName} a été mise à jour au statut suivant : {StatusTo}.';
$_['c_m_on_successful_signup']              = 'Bonjour, {CustomerName} ! Merci de vous être inscrit sur {StoreName}. Profitez de notre magasin !';
$_['a_m_on_new_quick_order_placed']         = 'Quelqu\'un a commandé quelque chose dans votre magasin. ID de commande rapide : {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Quelqu\'un a commandé quelque chose dans votre magasin. L\'ID de commande est : {OrderID}.';
$_['a_m_on_successful_signup']              = 'Bonjour, administrateur ! Le client {CustomerName} s\'est inscrit dans votre magasin !';

// Settings
$_['settings_title']                        = 'Paramètres';
$_['settings_sms_unicode']                  = 'SMS avec unicode :';
$_['settings_help_sms_unicode']             = 'La taille maximale du SMS avec unicode sera plus petite qu\'sans unicode.';
$_['settings_admins_phones']                = 'Numéros de téléphone des administrateurs :';
$_['settings_help_admins_phones']           = 'Les numéros de téléphone ajoutés seront utilisés pour les notifications de l\'administrateur.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Obtenez votre clé API sur <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell utilise le jeu de caractères UCS2. Taille du SMS avec unicode : <b>70 caractères</b>';
$_['clickatell_api_key']			        = 'Clé API :';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Obtenez vos clés API et Token sur <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />Taille du SMS sans unicode : <b>140 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['gatewayapi_api_key']		            = 'Clé API :';
$_['gatewayapi_api_secret']		            = 'Clé secrète API :';
$_['gatewayapi_token']		                = 'Token :';
$_['gatewayapi_sender']			            = 'Expéditeur :';
$_['gatewayapi_help_sender']	            = 'La taille du nom de l\'expéditeur non numérique doit être au maximum de 11 caractères. Pour le nom de l\'expéditeur numérique, la taille doit être au maximum de 15 caractères.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Obtenez votre identifiant d\'application et votre jeton depuis <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Taille du SMS sans unicode : <b>612 caractères</b><br />Taille du SMS avec unicode : <b>268 caractères</b>';
$_['bulk_gate_app_id']		                = 'Identifiant d\'application :';
$_['bulk_gate_token']		                = 'Jeton :';
$_['bulk_gate_sender']			            = 'Expéditeur :';
$_['bulk_gate_help_sender']	                = 'La taille du nom de l\'expéditeur non numérique doit être au maximum de 11 caractères. Pour le nom de l\'expéditeur numérique, la taille doit être au maximum de 15 caractères.';

// TurboSms
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Obtenez votre jeton depuis <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Taille du SMS sans unicode : <b>1521 caractères</b><br />Taille du SMS avec unicode : <b>661 caractères</b>';
$_['turbo_sms_token']		                = 'Jeton :';
$_['turbo_sms_sender']			            = 'Expéditeur :';
$_['turbo_sms_help_sender']	                = 'La taille du nom de l\'expéditeur non numérique doit être au maximum de 11 caractères. Pour le nom de l\'expéditeur numérique, la taille doit être au maximum de 15 caractères.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Obtenez votre identifiant API depuis <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Taille du SMS sans unicode : <b>160 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['sms_ru_api_id']		                    = 'Identifiant API :';
$_['sms_ru_sender']			                = 'Expéditeur :';
$_['sms_ru_help_sender']	                = 'La taille du nom de l\'expéditeur non numérique doit être au maximum de 11 caractères. Pour le nom de l\'expéditeur numérique, la taille doit être au maximum de 15 caractères.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                     = 'Obtenez vos clés privées et publiques API depuis <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Taille du SMS sans unicode : <b>160 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['e_pochta_public_key']		            = 'Clé publique :';
$_['e_pochta_private_key']		            = 'Clé privée :';
$_['e_pochta_sender']			            = 'Expéditeur :';
$_['e_pochta_help_sender']	                = 'Obtenez votre nom d\'expéditeur depuis <a href="https://atomic.center/sms/senders" target="_blank">ici</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Obtenez votre clé API depuis <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Taille du SMS sans unicode : <b>140 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['red_sms_login']		                    = 'Identifiant :';
$_['red_sms_api_key']		                = 'Clé API :';
$_['red_sms_sender']			            = 'Expéditeur :';
$_['red_sms_help_sender']	                = 'La taille du nom de l\'expéditeur non numérique doit être au maximum de 11 caractères. Pour le nom de l\'expéditeur numérique, la taille doit être au maximum de 15 caractères.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Obtenez votre clé API depuis <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Taille du SMS sans unicode : <b>160 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['bytehand_api_key']		                = 'Clé API :';
$_['bytehand_sender']			            = 'Expéditeur :';
$_['bytehand_help_sender']	                = 'Obtenez votre nom d\'expéditeur depuis <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">ici</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Obtenez votre clé API depuis <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Taille du SMS sans unicode : <b>160 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['intel_tele_username']		            = 'Nom d\'utilisateur :';
$_['intel_tele_api_key']		            = 'Clé API :';
$_['intel_tele_sender']			            = 'Expéditeur :';
$_['intel_tele_help_sender']	            = 'Obtenez votre nom d\'expéditeur depuis <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">ici</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Obtenez votre clé API depuis <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Taille du SMS sans unicode : <b>160 caractères</b><br />Taille du SMS avec unicode : <b>70 caractères</b>';
$_['digital_direct_api_key']		        = 'Clé API :';
$_['digital_direct_sender']			        = 'Expéditeur :';
$_['digital_direct_help_sender']	        = 'Obtenez votre nom d\'expéditeur depuis <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">ici</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'Vous pouvez obtenir votre identifiant de compte (Account SID) et votre jeton d\'authentification (Auth token) sur <a href="https://www.twilio.com" target="_blank">Twilio</a>.<br /><br />Taille du SMS sans Unicode : <b>160 caractères</b><br />Taille du SMS avec Unicode : <b>70 caractères</b>';
$_['twilio_account_sid']                    = 'Identifiant de compte :';
$_['twilio_auth_token']                     = 'Jeton d\'authentification :';
$_['twilio_sender_phone']                   = 'Numéro acheté sur twilio.com';

// Codes pays
$_['countries']                             = [
    array("code" => "AF", "name" => "Afghanistan", "d_code" => "+93"),
    array("code" => "AL", "name" => "Albanie", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Algérie", "d_code" => "+213"),
    array("code" => "AS", "name" => "Samoa américaines", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Andorre", "d_code" => "+376"),
    array("code" => "AO", "name" => "Angola", "d_code" => "+244"),
    array("code" => "AI", "name" => "Anguilla", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Antigua", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Argentine", "d_code" => "+54"),
    array("code" => "AM", "name" => "Arménie", "d_code" => "+374"),
    array("code" => "AW", "name" => "Aruba", "d_code" => "+297"),
    array("code" => "AU", "name" => "Australie", "d_code" => "+61"),
    array("code" => "AT", "name" => "Autriche", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Azerbaïdjan", "d_code" => "+994"),
    array("code" => "BH", "name" => "Bahreïn", "d_code" => "+973"),
    array("code" => "BD", "name" => "Bangladesh", "d_code" => "+880"),
    array("code" => "BB", "name" => "Barbade", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Bélarus", "d_code" => "+375"),
    array("code" => "BE", "name" => "Belgique", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Belize", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Bénin", "d_code" => "+229"),
    array("code" => "BM", "name" => "Bermudes", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Bhoutan", "d_code" => "+975"),
    array("code" => "BO", "name" => "Bolivie", "d_code" => "+591"),
    array("code" => "BA", "name" => "Bosnie-Herzégovine", "d_code" => "+387"),
    array("code" => "BW", "name" => "Botswana", "d_code" => "+267"),
    array("code" => "BR", "name" => "Brésil", "d_code" => "+55"),
    array("code" => "IO", "name" => "Territoire britannique de l'océan Indien", "d_code" => "+246"),
    array("code" => "VG", "name" => "Îles Vierges britanniques", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Brunéi", "d_code" => "+673"),
    array("code" => "BG", "name" => "Bulgarie", "d_code" => "+359"),
    array("code" => "BF", "name" => "Burkina Faso", "d_code" => "+226"),
    array("code" => "MM", "name" => "Birmanie Myanmar", "d_code" => "+95"),
    array("code" => "BI", "name" => "Burundi", "d_code" => "+257"),
    array("code" => "KH", "name" => "Cambodge", "d_code" => "+855"),
    array("code" => "CM", "name" => "Cameroun", "d_code" => "+237"),
    array("code" => "CA", "name" => "Canada", "d_code" => "+1"),
    array("code" => "CV", "name" => "Cap-Vert", "d_code" => "+238"),
    array("code" => "KY", "name" => "Îles Caïmans", "d_code" => "+1345"),
    array("code" => "CF", "name" => "République centrafricaine", "d_code" => "+236"),
    array("code" => "TD", "name" => "Tchad", "d_code" => "+235"),
    array("code" => "CL", "name" => "Chili", "d_code" => "+56"),
    array("code" => "CN", "name" => "Chine", "d_code" => "+86"),
    array("code" => "CO", "name" => "Colombie", "d_code" => "+57"),
    array("code" => "KM", "name" => "Comores", "d_code" => "+269"),
    array("code" => "CK", "name" => "Îles Cook", "d_code" => "+682"),
    array("code" => "CR", "name" => "Costa Rica", "d_code" => "+506"),
    array("code" => "CI", "name" => "Côte d'Ivoire", "d_code" => "+225"),
    array("code" => "HR", "name" => "Croatie", "d_code" => "+385"),
    array("code" => "CU", "name" => "Cuba", "d_code" => "+53"),
    array("code" => "CY", "name" => "Chypre", "d_code" => "+357"),
    array("code" => "CZ", "name" => "République tchèque", "d_code" => "+420"),
    array("code" => "CD", "name" => "République démocratique du Congo", "d_code" => "+243"),
    array("code" => "DK", "name" => "Danemark", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Djibouti", "d_code" => "+253"),
    array("code" => "DM", "name" => "Dominique", "d_code" => "+1767"),
    array("code" => "DO", "name" => "République dominicaine", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Équateur", "d_code" => "+593"),
    array("code" => "EG", "name" => "Égypte", "d_code" => "+20"),
    array("code" => "SV", "name" => "Salvador", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Guinée équatoriale", "d_code" => "+240"),
    array("code" => "ER", "name" => "Érythrée", "d_code" => "+291"),
    array("code" => "EE", "name" => "Estonie", "d_code" => "+372"),
    array("code" => "ET", "name" => "Éthiopie", "d_code" => "+251"),
    array("code" => "FK", "name" => "Îles Malouines", "d_code" => "+500"),
    array("code" => "FO", "name" => "Îles Féroé", "d_code" => "+298"),
    array("code" => "FM", "name" => "États fédérés de Micronésie", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Fidji", "d_code" => "+679"),
    array("code" => "FI", "name" => "Finlande", "d_code" => "+358"),
    array("code" => "FR", "name" => "France", "d_code" => "+33"),
    array("code" => "GF", "name" => "Guyane française", "d_code" => "+594"),
    array("code" => "PF", "name" => "Polynésie française", "d_code" => "+689"),
    array("code" => "GA", "name" => "Gabon", "d_code" => "+241"),
    array("code" => "GE", "name" => "Géorgie", "d_code" => "+995"),
    array("code" => "DE", "name" => "Allemagne", "d_code" => "+49"),
    array("code" => "GH", "name" => "Ghana", "d_code" => "+233"),
    array("code" => "GI", "name" => "Gibraltar", "d_code" => "+350"),
    array("code" => "GR", "name" => "Grèce", "d_code" => "+30"),
    array("code" => "GL", "name" => "Groenland", "d_code" => "+299"),
    array("code" => "GD", "name" => "Grenade", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Guadeloupe", "d_code" => "+590"),
    array("code" => "GU", "name" => "Guam", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Guatemala", "d_code" => "+502"),
    array("code" => "GN", "name" => "Guinée", "d_code" => "+224"),
    array("code" => "GW", "name" => "Guinée-Bissau", "d_code" => "+245"),
    array("code" => "GY", "name" => "Guyana", "d_code" => "+592"),
    array("code" => "HT", "name" => "Haïti", "d_code" => "+509"),
    array("code" => "HN", "name" => "Honduras", "d_code" => "+504"),
    array("code" => "HK", "name" => "Hong Kong", "d_code" => "+852"),
    array("code" => "HU", "name" => "Hongrie", "d_code" => "+36"),
    array("code" => "IS", "name" => "Islande", "d_code" => "+354"),
    array("code" => "IN", "name" => "Inde", "d_code" => "+91"),
    array("code" => "ID", "name" => "Indonésie", "d_code" => "+62"),
    array("code" => "IR", "name" => "Iran", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Irak", "d_code" => "+964"),
    array("code" => "IE", "name" => "Irlande", "d_code" => "+353"),
    array("code" => "IL", "name" => "Israël", "d_code" => "+972"),
    array("code" => "IT", "name" => "Italie", "d_code" => "+39"),
    array("code" => "JM", "name" => "Jamaïque", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Japon", "d_code" => "+81"),
    array("code" => "JO", "name" => "Jordanie", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Kazakhstan", "d_code" => "+7"),
    array("code" => "KE", "name" => "Kenya", "d_code" => "+254"),
    array("code" => "KI", "name" => "Kiribati", "d_code" => "+686"),
    array("code" => "KW", "name" => "Koweït", "d_code" => "+965"),
    array("code" => "KG", "name" => "Kirghizistan", "d_code" => "+996"),
    array("code" => "LA", "name" => "Laos", "d_code" => "+856"),
    array("code" => "LV", "name" => "Lettonie", "d_code" => "+371"),
    array("code" => "LB", "name" => "Liban", "d_code" => "+961"),
    array("code" => "LS", "name" => "Lesotho", "d_code" => "+266"),
    array("code" => "LR", "name" => "Libéria", "d_code" => "+231"),
    array("code" => "LY", "name" => "Libye", "d_code" => "+218"),
    array("code" => "LI", "name" => "Liechtenstein", "d_code" => "+423"),
    array("code" => "LT", "name" => "Lituanie", "d_code" => "+370"),
    array("code" => "LU", "name" => "Luxembourg", "d_code" => "+352"),
    array("code" => "MO", "name" => "Macao", "d_code" => "+853"),
    array("code" => "MK", "name" => "Macédoine", "d_code" => "+389"),
    array("code" => "MG", "name" => "Madagascar", "d_code" => "+261"),
    array("code" => "MW", "name" => "Malawi", "d_code" => "+265"),
    array("code" => "MY", "name" => "Malaisie", "d_code" => "+60"),
    array("code" => "MV", "name" => "Maldives", "d_code" => "+960"),
    array("code" => "ML", "name" => "Mali", "d_code" => "+223"),
    array("code" => "MT", "name" => "Malte", "d_code" => "+356"),
    array("code" => "MH", "name" => "Îles Marshall", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Martinique", "d_code" => "+596"),
    array("code" => "MR", "name" => "Mauritanie", "d_code" => "+222"),
    array("code" => "MU", "name" => "Maurice", "d_code" => "+230"),
    array("code" => "YT", "name" => "Mayotte", "d_code" => "+262"),
    array("code" => "MX", "name" => "Mexique", "d_code" => "+52"),
    array("code" => "MD", "name" => "Moldavie", "d_code" => "+373"),
    array("code" => "MC", "name" => "Monaco", "d_code" => "+377"),
    array("code" => "MN", "name" => "Mongolie", "d_code" => "+976"),
    array("code" => "ME", "name" => "Monténégro", "d_code" => "+382"),
    array("code" => "MS", "name" => "Montserrat", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Maroc", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Mozambique", "d_code" => "+258"),
    array("code" => "NA", "name" => "Namibie", "d_code" => "+264"),
    array("code" => "NR", "name" => "Nauru", "d_code" => "+674"),
    array("code" => "NP", "name" => "Népal", "d_code" => "+977"),
    array("code" => "NL", "name" => "Pays-Bas", "d_code" => "+31"),
    array("code" => "AN", "name" => "Antilles néerlandaises", "d_code" => "+599"),
    array("code" => "NC", "name" => "Nouvelle-Calédonie", "d_code" => "+687"),
    array("code" => "NZ", "name" => "Nouvelle-Zélande", "d_code" => "+64"),
    array("code" => "NI", "name" => "Nicaragua", "d_code" => "+505"),
    array("code" => "NE", "name" => "Niger", "d_code" => "+227"),
    array("code" => "NG", "name" => "Nigéria", "d_code" => "+234"),
    array("code" => "NU", "name" => "Niue", "d_code" => "+683"),
    array("code" => "NF", "name" => "Île Norfolk", "d_code" => "+672"),
    array("code" => "KP", "name" => "Corée du Nord", "d_code" => "+850"),
    array("code" => "MP", "name" => "Îles Mariannes du Nord", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Norvège", "d_code" => "+47"),
    array("code" => "OM", "name" => "Oman", "d_code" => "+968"),
    array("code" => "PK", "name" => "Pakistan", "d_code" => "+92"),
    array("code" => "PW", "name" => "Palaos", "d_code" => "+680"),
    array("code" => "PS", "name" => "Palestine", "d_code" => "+970"),
    array("code" => "PA", "name" => "Panama", "d_code" => "+507"),
    array("code" => "PG", "name" => "Papouasie-Nouvelle-Guinée", "d_code" => "+675"),
    array("code" => "PY", "name" => "Paraguay", "d_code" => "+595"),
    array("code" => "PE", "name" => "Pérou", "d_code" => "+51"),
    array("code" => "PH", "name" => "Philippines", "d_code" => "+63"),
    array("code" => "PL", "name" => "Pologne", "d_code" => "+48"),
    array("code" => "PT", "name" => "Portugal", "d_code" => "+351"),
    array("code" => "PR", "name" => "Porto Rico", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Qatar", "d_code" => "+974"),
    array("code" => "CG", "name" => "République du Congo", "d_code" => "+242"),
    array("code" => "RE", "name" => "Réunion", "d_code" => "+262"),
    array("code" => "RO", "name" => "Roumanie", "d_code" => "+40"),
    array("code" => "RU", "name" => "Russie", "d_code" => "+7"),
    array("code" => "RW", "name" => "Rwanda", "d_code" => "+250"),
    array("code" => "SH", "name" => "Sainte-Hélène", "d_code" => "+290"),
    array("code" => "KN", "name" => "Saint-Christophe-et-Niévès", "d_code" => "+1869"),
    array("code" => "PM", "name" => "Saint-Pierre-et-Miquelon", "d_code" => "+508"),
    array("code" => "VC", "name" => "Saint-Vincent-et-les Grenadines", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Samoa", "d_code" => "+685"),
    array("code" => "SM", "name" => "Saint-Marin", "d_code" => "+378"),
    array("code" => "ST", "name" => "São Tomé-et-Príncipe", "d_code" => "+239"),
    array("code" => "SA", "name" => "Arabie saoudite", "d_code" => "+966"),
    array("code" => "SN", "name" => "Sénégal", "d_code" => "+221"),
    array("code" => "RS", "name" => "Serbie", "d_code" => "+381"),
    array("code" => "SC", "name" => "Seychelles", "d_code" => "+248"),
    array("code" => "SL", "name" => "Sierra Leone", "d_code" => "+232"),
    array("code" => "SG", "name" => "Singapour", "d_code" => "+65"),
    array("code" => "SK", "name" => "Slovaquie", "d_code" => "+421"),
    array("code" => "SI", "name" => "Slovénie", "d_code" => "+386"),
    array("code" => "SB", "name" => "Îles Salomon", "d_code" => "+677"),
    array("code" => "SO", "name" => "Somalie", "d_code" => "+252"),
    array("code" => "ZA", "name" => "Afrique du Sud", "d_code" => "+27"),
    array("code" => "KR", "name" => "Corée du Sud", "d_code" => "+82"),
    array("code" => "ES", "name" => "Espagne", "d_code" => "+34"),
    array("code" => "LK", "name" => "Sri Lanka", "d_code" => "+94"),
    array("code" => "LC", "name" => "Sainte-Lucie", "d_code" => "+1"),
    array("code" => "SD", "name" => "Soudan", "d_code" => "+249"),
    array("code" => "SR", "name" => "Surinam", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Swaziland", "d_code" => "+268"),
    array("code" => "SE", "name" => "Suède", "d_code" => "+46"),
    array("code" => "CH", "name" => "Suisse", "d_code" => "+41"),
    array("code" => "SY", "name" => "Syrie", "d_code" => "+963"),
    array("code" => "TW", "name" => "Taïwan", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Tadjikistan", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Tanzanie", "d_code" => "+255"),
    array("code" => "TH", "name" => "Thaïlande", "d_code" => "+66"),
    array("code" => "BS", "name" => "Bahamas", "d_code" => "+1242"),
    array("code" => "GM", "name" => "Gambie", "d_code" => "+220"),
    array("code" => "TL", "name" => "Timor oriental", "d_code" => "+670"),
    array("code" => "TG", "name" => "Togo", "d_code" => "+228"),
    array("code" => "TK", "name" => "Tokélaou", "d_code" => "+690"),
    array("code" => "TO", "name" => "Tonga", "d_code" => "+676"),
    array("code" => "TT", "name" => "Trinité-et-Tobago", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Tunisie", "d_code" => "+216"),
    array("code" => "TR", "name" => "Turquie", "d_code" => "+90"),
    array("code" => "TM", "name" => "Turkménistan", "d_code" => "+993"),
    array("code" => "TC", "name" => "Îles Turques-et-Caïques", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Tuvalu", "d_code" => "+688"),
    array("code" => "UG", "name" => "Ouganda", "d_code" => "+256"),
    array("code" => "UA", "name" => "Ukraine", "d_code" => "+380"),
    array("code" => "AE", "name" => "Émirats arabes unis", "d_code" => "+971"),
    array("code" => "GB", "name" => "Royaume-Uni", "d_code" => "+44"),
    array("code" => "US", "name" => "États-Unis", "d_code" => "+1"),
    array("code" => "UY", "name" => "Uruguay", "d_code" => "+598"),
    array("code" => "VI", "name" => "Îles Vierges américaines", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Ouzbékistan", "d_code" => "+998"),
    array("code" => "VU", "name" => "Vanuatu", "d_code" => "+678"),
    array("code" => "VA", "name" => "Cité du Vatican", "d_code" => "+39"),
    array("code" => "VE", "name" => "Venezuela", "d_code" => "+58"),
    array("code" => "VN", "name" => "Vietnam", "d_code" => "+84"),
    array("code" => "WF", "name" => "Wallis-et-Futuna", "d_code" => "+681"),
    array("code" => "YE", "name" => "Yémen", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Zambie", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Zimbabwe", "d_code" => "+263")
];