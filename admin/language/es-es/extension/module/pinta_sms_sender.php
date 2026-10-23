<?php
$_['heading_title']                         = '<img style="width:45px;" src="view/image/pinta_sms_sender/icon_pinta.png"> Enviador de Notificaciones SMS <span style="font-size:12px; color:#999">[1.9.4] por <a href="https://shop.pinta.pro/opencart" style="font-size:1em; color:#999" target="_blank">Pinta Webware</a></span>';
$_['heading_text']                          = 'Enviador de Notificaciones SMS';
$_['text_module']                           = 'Extensiones';
$_['text_success']                          = 'Éxito: ¡Ha modificado el módulo <strong>Enviador de Notificaciones SMS</strong>!';
$_['text_error']                            = '¡No tiene permisos para editar este módulo!';

// General
$_['general_title']                         = 'General';
$_['general_status']                        = 'Estado SMS:';
$_['general_api']                           = 'API SMS:';

$_['error_permission']                      = 'Advertencia: ¡No tiene permiso para modificar el módulo Enviador de Notificaciones SMS!';
$_['error_input_form']                      = '¡Por favor, verifique el formulario en busca de errores!';
$_['error_requirements']                    = 'Para usar uno de los Servicios SMS, ¡debe completar todos los campos en la pestaña del servicio!';

$_['subject_text']                          = 'Asunto';
$_['text_yes']                              = 'Sí';
$_['text_no']                               = 'No';
$_['text_enabled']                          = 'Habilitado';
$_['text_disabled']                         = 'Deshabilitado';
$_['text_info']                             = 'Información:';
$_['text_buy_quick_order']                  = 'Comprar Pedido Rápido';

$_['button_save']                           = 'Guardar';
$_['button_cancel']				            = 'Cancelar';
$_['button_remove']				            = 'Eliminar';
$_['button_add']				            = 'Agregar';

$_['save_changes']				            = 'Guardar cambios';

// Events
$_['events_title']                          = 'Eventos';
$_['text_status']                           = 'Estado:';
$_['order_status']                          = 'Estado del pedido:';
$_['order_message']                         = 'Mensaje:';
$_['order_characters']                      = 'Caracteres:';
$_['order_sms_counter']                     = 'Contador de SMS:';
$_['send_sms_to_customers']                 = 'Enviar SMS al cliente';
$_['send_sms_to_owner']                     = 'Enviar SMS al propietario de la tienda';
$_['on_new_quick_order_placed']             = 'En nuevo Pedido Rápido realizado';
$_['on_new_order_placed']                   = 'En nuevo pedido realizado';
$_['on_order_status_change']                = 'En cambio de estado del pedido';
$_['on_successful_signup']                  = 'En registro exitoso';
$_['help_c_m_on_new_quick_order_placed']    = 'Códigos cortos:<br/>{QuickOrderID} - ID de Pedido Rápido<br/>{SiteName} - Nombre de la tienda<br/>{ProductID} - ID del producto<br/>{ProductAmount} - Cantidad del producto<br/>{ProductName} - Nombre del producto<br/>{Price} - Precio total<br/>{PageUrl} - URL de enlace del producto<br/>{Name} - Nombre del cliente<br/>{Email} - Correo electrónico del cliente<br/>{Phone} - Teléfono del cliente<br/>{Comment} - Comentario del cliente';
$_['help_c_m_on_new_order_placed']          = 'Códigos cortos:<br/><i>* Tenga en cuenta que estos códigos cortos se reemplazarán por la información real del pedido en tiempo de ejecución.</i><br/><br/>{SiteName} - Nombre de la tienda<br/>{OrderID} - ID del pedido<br/>{CartTotal} - Total del carrito<br/>{ShippingAddress} - Dirección de envío<br/>{ShippingMethod} - Método de envío<br/>{PaymentAddress} - Dirección de pago<br/>{PaymentMethod} - Método de pago';
$_['help_c_o_on_order_status_change']       = 'Elija en qué cambios de estado de pedido desea que el cliente sea notificado por SMS';
$_['help_c_m_on_order_status_change']       = 'Códigos cortos:<br/>{QuickOrderID} - ID de Pedido Rápido<br/>{SiteName} - Nombre de la tienda<br/>{ProductID} - ID del producto<br/>{ProductAmount} - Cantidad del producto<br/>{ProductName} - Nombre del producto<br/>{Price} - Precio total<br/>{PageUrl} - URL de enlace del producto<br/>{Name} - Nombre del cliente<br/>{Email} - Correo electrónico del cliente<br/>{Phone} - Teléfono del cliente<br/>{Comment} - Comentario del cliente';
$_['help_c_m_on_successful_signup']         = 'Códigos cortos:<br/>{SiteName} - Nombre de la tienda<br/>{CustomerName} - Nombre del cliente';
$_['help_a_m_on_new_quick_order_placed']    = 'Códigos cortos:<br/>{QuickOrderID} - ID de Pedido Rápido<br/>{SiteName} - Nombre de la tienda<br/>{ProductID} - ID del producto<br/>{ProductAmount} - Cantidad del producto<br/>{ProductName} - Nombre del producto<br/>{Price} - Precio total<br/>{PageUrl} - URL de enlace del producto<br/>{Name} - Nombre del cliente<br/>{Email} - Correo electrónico del cliente<br/>{Phone} - Teléfono del cliente<br/>{Comment} - Comentario del cliente';
$_['help_a_m_on_new_order_placed']          = 'Códigos cortos:<br/>{SiteName} - Nombre de la tienda<br/>{OrderID} - ID del pedido<br/>{CartTotal} - Total del carrito';
$_['help_a_m_on_successful_signup']         = 'Códigos cortos:<br/>{SiteName} - Nombre de la tienda<br/>{CustomerName} - Nombre del cliente';
$_['c_m_on_new_quick_order_placed']         = 'Gracias por ordenar en {SiteName}. Su ID de Pedido Rápido es: {QuickOrderID}.';
$_['c_m_on_new_order_placed']               = 'Gracias por ordenar en {SiteName}. Su ID de pedido es: {OrderID}.';
$_['c_m_on_order_status_change']            = 'Su pedido ({OrderID}) en {SiteName} se ha actualizado al siguiente estado: {StatusTo}.';
$_['c_m_on_successful_signup']              = '¡Hola, {CustomerName}! Gracias por registrarte en {StoreName}. ¡Disfruta de nuestra tienda!';
$_['a_m_on_new_quick_order_placed']         = 'Alguien ordenó algo en tu tienda. ID de Pedido Rápido: {QuickOrderID}.';
$_['a_m_on_new_order_placed']               = 'Alguien ordenó algo en tu tienda. El ID del pedido es: {OrderID}.';
$_['a_m_on_successful_signup']              = '¡Hola, administrador! El cliente {CustomerName} se registró en tu tienda!';

// Settings
$_['settings_title']                        = 'Configuración';
$_['settings_sms_unicode']                  = 'SMS con unicode:';
$_['settings_help_sms_unicode']             = 'El tamaño máximo del SMS con unicode será menor que sin él.';
$_['settings_admins_phones']                = 'Números de teléfono de los administradores:';
$_['settings_help_admins_phones']           = 'Los números de teléfono agregados se utilizarán para notificaciones de administrador.';

// Clickatell
$_['clickatell_title']                      = 'Clickatell';
$_['clickatell_help_keys']                  = 'Obtenga su clave API de <a href="https://app.clickatell.com/" target="_blank">Clickatell</a>.<br /><br />Clickatell utiliza el conjunto de caracteres UCS2. Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['clickatell_api_key']			        = 'Clave API:';

// GatewayAPI
$_['gatewayapi_title']                      = 'GatewayAPI';
$_['gatewayapi_help_keys']                  = 'Obtenga sus claves API y Token de <a href="https://gatewayapi.com/app/settings/api-oauth/" target="_blank">GatewayAPI</a>.<br /><br />Tamaño del SMS sin unicode: <b>140 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['gatewayapi_api_key']		            = 'Clave API:';
$_['gatewayapi_api_secret']		            = 'Clave Secreta API:';
$_['gatewayapi_token']		                = 'Token:';
$_['gatewayapi_sender']			            = 'Remitente:';
$_['gatewayapi_help_sender']	            = 'El tamaño del remitente no numérico debe ser máximo de 11 caracteres. Para el remitente numérico, el tamaño debe ser máximo de 15 caracteres.';

// BulkGateAPI
$_['bulk_gate_title']                       = 'BulkGate';
$_['bulk_gate_help_app']                    = 'Obtén tu ID de aplicación y Token de <a href="https://portal.bulkgate.com/application/" target="_blank">BulkGate</a>.<br /><br />Tamaño del SMS sin unicode: <b>612 caracteres</b><br />Tamaño del SMS con unicode: <b>268 caracteres</b>';
$_['bulk_gate_app_id']		                = 'ID de aplicación:';
$_['bulk_gate_token']		                = 'Token:';
$_['bulk_gate_sender']			            = 'Remitente:';
$_['bulk_gate_help_sender']	                = 'El tamaño del remitente no numérico debe ser máximo de 11 caracteres. Para el remitente numérico, el tamaño debe ser máximo de 15 caracteres.';

// TurboSms
$_['turbo_sms_title']                       = 'TurboSms';
$_['turbo_sms_help_token']                  = 'Obtén tu Token de <a href="https://turbosms.ua/route.html" target="_blank">TurboSms</a>.<br /><br />Tamaño del SMS sin unicode: <b>1521 caracteres</b><br />Tamaño del SMS con unicode: <b>661 caracteres</b>';
$_['turbo_sms_token']		                = 'Token:';
$_['turbo_sms_sender']			            = 'Remitente:';
$_['turbo_sms_help_sender']	                = 'El tamaño del remitente no numérico debe ser máximo de 11 caracteres. Para el remitente numérico, el tamaño debe ser máximo de 15 caracteres.';

// SmsRu
$_['sms_ru_title']                          = 'SmsRu';
$_['sms_ru_help_api']                       = 'Obtén tu ID de API de <a href="https://sms.ru/?panel=api" target="_blank">SmsRu</a>.<br /><br />Tamaño del SMS sin unicode: <b>160 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['sms_ru_api_id']		                    = 'ID de API:';
$_['sms_ru_sender']			                = 'Remitente:';
$_['sms_ru_help_sender']	                = 'El tamaño del remitente no numérico debe ser máximo de 11 caracteres. Para el remitente numérico, el tamaño debe ser máximo de 15 caracteres.';

// ePochta
$_['e_pochta_title']                        = 'EPochta';
$_['e_pochta_help_keys']                     = 'Obtén tus claves privada y pública de API de <a href="https://atomic.center/settings/" target="_blank">EPochta</a>.<br /><br />Tamaño del SMS sin unicode: <b>160 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['e_pochta_public_key']		            = 'Clave pública:';
$_['e_pochta_private_key']		            = 'Clave privada:';
$_['e_pochta_sender']			            = 'Remitente:';
$_['e_pochta_help_sender']	                = 'Obtén tu nombre de remitente desde <a href="https://atomic.center/sms/senders" target="_blank">aquí</a>';

// RedSms
$_['red_sms_title']                         = 'RedSms';
$_['red_sms_help_api']                      = 'Obtén tu clave de API de <a href="https://cp.redsms.ru/settings/api" target="_blank">RedSMS</a>.<br /><br />Tamaño del SMS sin unicode: <b>140 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['red_sms_login']		                    = 'Inicio de sesión:';
$_['red_sms_api_key']		                = 'Clave de API:';
$_['red_sms_sender']			            = 'Remitente:';
$_['red_sms_help_sender']	                = 'El tamaño del remitente no numérico debe ser máximo de 11 caracteres. Para el remitente numérico, el tamaño debe ser máximo de 15 caracteres.';

// Bytehand
$_['bytehand_title']                        = 'Bytehand';
$_['bytehand_help_api']                     = 'Obtén tu clave de API de <a href="https://www.bytehand.com/ru/secure/settings" target="_blank">Bytehand</a>.<br /><br />Tamaño del SMS sin unicode: <b>160 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['bytehand_api_key']		                = 'Clave de API:';
$_['bytehand_sender']			            = 'Remitente:';
$_['bytehand_help_sender']	                = 'Obtén tu nombre de remitente desde <a href="https://www.bytehand.com/ru/secure/sms/senders" target="_blank">aquí</a>';

// IntelTele
$_['intel_tele_title']                      = 'IntelTele';
$_['intel_tele_help_api']                   = 'Obtén tu clave de API de <a href="https://sms.intel-tele.com/cabinet/dev/api/keys/" target="_blank">IntelTele</a>.<br /><br />Tamaño del SMS sin unicode: <b>160 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['intel_tele_username']		            = 'Nombre de usuario:';
$_['intel_tele_api_key']		            = 'Clave de API:';
$_['intel_tele_sender']			            = 'Remitente:';
$_['intel_tele_help_sender']	            = 'Obtén tu nombre de remitente desde <a href="https://sms.intel-tele.com/cabinet/sms/sender/" target="_blank">aquí</a>';

// DigitalDirect
$_['digital_direct_title']                  = 'DigitalDirect';
$_['digital_direct_help_api']               = 'Obtén tu clave de API de <a href="https://direct.i-dgtl.ru/settings/api-keys" target="_blank">DigitalDirect</a>.<br /><br />Tamaño del SMS sin unicode: <b>160 caracteres</b><br />Tamaño del SMS con unicode: <b>70 caracteres</b>';
$_['digital_direct_api_key']		        = 'Clave de API:';
$_['digital_direct_sender']			        = 'Remitente:';
$_['digital_direct_help_sender']	        = 'Obtén tu nombre de remitente desde <a href="https://direct.i-dgtl.ru/sender-names/sms" target="_blank">aquí</a>';

// Twilio
$_['twilio_title']                          = 'Twilio';
$_['twilio_help_app']                       = 'Puedes obtener tu Account SID y el token de autenticación de <a href="https://www.twilio.com" target="_blank">Twilio</a>.<br /><br />Tamaño del SMS sin Unicode: <b>160 caracteres</b><br />Tamaño del SMS con Unicode: <b>70 caracteres</b>';
$_['twilio_account_sid']                    = 'Account SID:';
$_['twilio_auth_token']                     = 'Token de autenticación:';
$_['twilio_sender_phone']                   = 'Número comprado en twilio.com';

// Códigos de país
$_['countries']                             = [
    array("code" => "AF", "name" => "Afganistán", "d_code" => "+93"),
    array("code" => "AL", "name" => "Albania", "d_code" => "+355"),
    array("code" => "DZ", "name" => "Argelia", "d_code" => "+213"),
    array("code" => "AS", "name" => "Samoa Americana", "d_code" => "+1684"),
    array("code" => "AD", "name" => "Andorra", "d_code" => "+376"),
    array("code" => "AO", "name" => "Angola", "d_code" => "+244"),
    array("code" => "AI", "name" => "Anguila", "d_code" => "+1264"),
    array("code" => "AG", "name" => "Antigua", "d_code" => "+1268"),
    array("code" => "AR", "name" => "Argentina", "d_code" => "+54"),
    array("code" => "AM", "name" => "Armenia", "d_code" => "+374"),
    array("code" => "AW", "name" => "Aruba", "d_code" => "+297"),
    array("code" => "AU", "name" => "Australia", "d_code" => "+61"),
    array("code" => "AT", "name" => "Austria", "d_code" => "+43"),
    array("code" => "AZ", "name" => "Azerbaiyán", "d_code" => "+994"),
    array("code" => "BH", "name" => "Bahréin", "d_code" => "+973"),
    array("code" => "BD", "name" => "Bangladesh", "d_code" => "+880"),
    array("code" => "BB", "name" => "Barbados", "d_code" => "+1246"),
    array("code" => "BY", "name" => "Bielorrusia", "d_code" => "+375"),
    array("code" => "BE", "name" => "Bélgica", "d_code" => "+32"),
    array("code" => "BZ", "name" => "Belice", "d_code" => "+501"),
    array("code" => "BJ", "name" => "Benín", "d_code" => "+229"),
    array("code" => "BM", "name" => "Bermudas", "d_code" => "+1441"),
    array("code" => "BT", "name" => "Bután", "d_code" => "+975"),
    array("code" => "BO", "name" => "Bolivia", "d_code" => "+591"),
    array("code" => "BA", "name" => "Bosnia y Herzegovina", "d_code" => "+387"),
    array("code" => "BW", "name" => "Botsuana", "d_code" => "+267"),
    array("code" => "BR", "name" => "Brasil", "d_code" => "+55"),
    array("code" => "IO", "name" => "Territorio Británico del Océano Índico", "d_code" => "+246"),
    array("code" => "VG", "name" => "Islas Vírgenes Británicas", "d_code" => "+1284"),
    array("code" => "BN", "name" => "Brunéi", "d_code" => "+673"),
    array("code" => "BG", "name" => "Bulgaria", "d_code" => "+359"),
    array("code" => "BF", "name" => "Burkina Faso", "d_code" => "+226"),
    array("code" => "MM", "name" => "Birmania (Myanmar)", "d_code" => "+95"),
    array("code" => "BI", "name" => "Burundi", "d_code" => "+257"),
    array("code" => "KH", "name" => "Camboya", "d_code" => "+855"),
    array("code" => "CM", "name" => "Camerún", "d_code" => "+237"),
    array("code" => "CA", "name" => "Canadá", "d_code" => "+1"),
    array("code" => "CV", "name" => "Cabo Verde", "d_code" => "+238"),
    array("code" => "KY", "name" => "Islas Caimán", "d_code" => "+1345"),
    array("code" => "CF", "name" => "República Centroafricana", "d_code" => "+236"),
    array("code" => "TD", "name" => "Chad", "d_code" => "+235"),
    array("code" => "CL", "name" => "Chile", "d_code" => "+56"),
    array("code" => "CN", "name" => "China", "d_code" => "+86"),
    array("code" => "CO", "name" => "Colombia", "d_code" => "+57"),
    array("code" => "KM", "name" => "Comoras", "d_code" => "+269"),
    array("code" => "CK", "name" => "Islas Cook", "d_code" => "+682"),
    array("code" => "CR", "name" => "Costa Rica", "d_code" => "+506"),
    array("code" => "CI", "name" => "Costa de Marfil", "d_code" => "+225"),
    array("code" => "HR", "name" => "Croacia", "d_code" => "+385"),
    array("code" => "CU", "name" => "Cuba", "d_code" => "+53"),
    array("code" => "CY", "name" => "Chipre", "d_code" => "+357"),
    array("code" => "CZ", "name" => "República Checa", "d_code" => "+420"),
    array("code" => "CD", "name" => "República Democrática del Congo", "d_code" => "+243"),
    array("code" => "DK", "name" => "Dinamarca", "d_code" => "+45"),
    array("code" => "DJ", "name" => "Yibuti", "d_code" => "+253"),
    array("code" => "DM", "name" => "Dominica", "d_code" => "+1767"),
    array("code" => "DO", "name" => "República Dominicana", "d_code" => "+1809"),
    array("code" => "EC", "name" => "Ecuador", "d_code" => "+593"),
    array("code" => "EG", "name" => "Egipto", "d_code" => "+20"),
    array("code" => "SV", "name" => "El Salvador", "d_code" => "+503"),
    array("code" => "GQ", "name" => "Guinea Ecuatorial", "d_code" => "+240"),
    array("code" => "ER", "name" => "Eritrea", "d_code" => "+291"),
    array("code" => "EE", "name" => "Estonia", "d_code" => "+372"),
    array("code" => "ET", "name" => "Etiopía", "d_code" => "+251"),
    array("code" => "FK", "name" => "Islas Malvinas", "d_code" => "+500"),
    array("code" => "FO", "name" => "Islas Feroe", "d_code" => "+298"),
    array("code" => "FM", "name" => "Estados Federados de Micronesia", "d_code" => "+691"),
    array("code" => "FJ", "name" => "Fiyi", "d_code" => "+679"),
    array("code" => "FI", "name" => "Finlandia", "d_code" => "+358"),
    array("code" => "FR", "name" => "Francia", "d_code" => "+33"),
    array("code" => "GF", "name" => "Guayana Francesa", "d_code" => "+594"),
    array("code" => "PF", "name" => "Polinesia Francesa", "d_code" => "+689"),
    array("code" => "GA", "name" => "Gabón", "d_code" => "+241"),
    array("code" => "GE", "name" => "Georgia", "d_code" => "+995"),
    array("code" => "DE", "name" => "Alemania", "d_code" => "+49"),
    array("code" => "GH", "name" => "Ghana", "d_code" => "+233"),
    array("code" => "GI", "name" => "Gibraltar", "d_code" => "+350"),
    array("code" => "GR", "name" => "Grecia", "d_code" => "+30"),
    array("code" => "GL", "name" => "Groenlandia", "d_code" => "+299"),
    array("code" => "GD", "name" => "Granada", "d_code" => "+1473"),
    array("code" => "GP", "name" => "Guadalupe", "d_code" => "+590"),
    array("code" => "GU", "name" => "Guam", "d_code" => "+1671"),
    array("code" => "GT", "name" => "Guatemala", "d_code" => "+502"),
    array("code" => "GN", "name" => "Guinea", "d_code" => "+224"),
    array("code" => "GW", "name" => "Guinea-Bisáu", "d_code" => "+245"),
    array("code" => "GY", "name" => "Guyana", "d_code" => "+592"),
    array("code" => "HT", "name" => "Haití", "d_code" => "+509"),
    array("code" => "HN", "name" => "Honduras", "d_code" => "+504"),
    array("code" => "HK", "name" => "Hong Kong", "d_code" => "+852"),
    array("code" => "HU", "name" => "Hungría", "d_code" => "+36"),
    array("code" => "IS", "name" => "Islandia", "d_code" => "+354"),
    array("code" => "IN", "name" => "India", "d_code" => "+91"),
    array("code" => "ID", "name" => "Indonesia", "d_code" => "+62"),
    array("code" => "IR", "name" => "Irán", "d_code" => "+98"),
    array("code" => "IQ", "name" => "Irak", "d_code" => "+964"),
    array("code" => "IE", "name" => "Irlanda", "d_code" => "+353"),
    array("code" => "IL", "name" => "Israel", "d_code" => "+972"),
    array("code" => "IT", "name" => "Italia", "d_code" => "+39"),
    array("code" => "JM", "name" => "Jamaica", "d_code" => "+1876"),
    array("code" => "JP", "name" => "Japón", "d_code" => "+81"),
    array("code" => "JO", "name" => "Jordania", "d_code" => "+962"),
    array("code" => "KZ", "name" => "Kazajistán", "d_code" => "+7"),
    array("code" => "KE", "name" => "Kenia", "d_code" => "+254"),
    array("code" => "KI", "name" => "Kiribati", "d_code" => "+686"),
    array("code" => "KW", "name" => "Kuwait", "d_code" => "+965"),
    array("code" => "KG", "name" => "Kirguistán", "d_code" => "+996"),
    array("code" => "LA", "name" => "Laos", "d_code" => "+856"),
    array("code" => "LV", "name" => "Letonia", "d_code" => "+371"),
    array("code" => "LB", "name" => "Líbano", "d_code" => "+961"),
    array("code" => "LS", "name" => "Lesoto", "d_code" => "+266"),
    array("code" => "LR", "name" => "Liberia", "d_code" => "+231"),
    array("code" => "LY", "name" => "Libia", "d_code" => "+218"),
    array("code" => "LI", "name" => "Liechtenstein", "d_code" => "+423"),
    array("code" => "LT", "name" => "Lituania", "d_code" => "+370"),
    array("code" => "LU", "name" => "Luxemburgo", "d_code" => "+352"),
    array("code" => "MO", "name" => "Macao", "d_code" => "+853"),
    array("code" => "MK", "name" => "Macedonia", "d_code" => "+389"),
    array("code" => "MG", "name" => "Madagascar", "d_code" => "+261"),
    array("code" => "MW", "name" => "Malawi", "d_code" => "+265"),
    array("code" => "MY", "name" => "Malasia", "d_code" => "+60"),
    array("code" => "MV", "name" => "Maldivas", "d_code" => "+960"),
    array("code" => "ML", "name" => "Malí", "d_code" => "+223"),
    array("code" => "MT", "name" => "Malta", "d_code" => "+356"),
    array("code" => "MH", "name" => "Islas Marshall", "d_code" => "+692"),
    array("code" => "MQ", "name" => "Martinica", "d_code" => "+596"),
    array("code" => "MR", "name" => "Mauritania", "d_code" => "+222"),
    array("code" => "MU", "name" => "Mauricio", "d_code" => "+230"),
    array("code" => "YT", "name" => "Mayotte", "d_code" => "+262"),
    array("code" => "MX", "name" => "México", "d_code" => "+52"),
    array("code" => "MD", "name" => "Moldavia", "d_code" => "+373"),
    array("code" => "MC", "name" => "Mónaco", "d_code" => "+377"),
    array("code" => "MN", "name" => "Mongolia", "d_code" => "+976"),
    array("code" => "ME", "name" => "Montenegro", "d_code" => "+382"),
    array("code" => "MS", "name" => "Montserrat", "d_code" => "+1664"),
    array("code" => "MA", "name" => "Marruecos", "d_code" => "+212"),
    array("code" => "MZ", "name" => "Mozambique", "d_code" => "+258"),
    array("code" => "NA", "name" => "Namibia", "d_code" => "+264"),
    array("code" => "NR", "name" => "Nauru", "d_code" => "+674"),
    array("code" => "NP", "name" => "Nepal", "d_code" => "+977"),
    array("code" => "NL", "name" => "Países Bajos", "d_code" => "+31"),
    array("code" => "AN", "name" => "Antillas Neerlandesas", "d_code" => "+599"),
    array("code" => "NC", "name" => "Nueva Caledonia", "d_code" => "+687"),
    array("code" => "NZ", "name" => "Nueva Zelanda", "d_code" => "+64"),
    array("code" => "NI", "name" => "Nicaragua", "d_code" => "+505"),
    array("code" => "NE", "name" => "Níger", "d_code" => "+227"),
    array("code" => "NG", "name" => "Nigeria", "d_code" => "+234"),
    array("code" => "NU", "name" => "Niue", "d_code" => "+683"),
    array("code" => "NF", "name" => "Isla Norfolk", "d_code" => "+672"),
    array("code" => "KP", "name" => "Corea del Norte", "d_code" => "+850"),
    array("code" => "MP", "name" => "Islas Marianas del Norte", "d_code" => "+1670"),
    array("code" => "NO", "name" => "Noruega", "d_code" => "+47"),
    array("code" => "OM", "name" => "Omán", "d_code" => "+968"),
    array("code" => "PK", "name" => "Pakistán", "d_code" => "+92"),
    array("code" => "PW", "name" => "Palaos", "d_code" => "+680"),
    array("code" => "PS", "name" => "Palestina", "d_code" => "+970"),
    array("code" => "PA", "name" => "Panamá", "d_code" => "+507"),
    array("code" => "PG", "name" => "Papúa Nueva Guinea", "d_code" => "+675"),
    array("code" => "PY", "name" => "Paraguay", "d_code" => "+595"),
    array("code" => "PE", "name" => "Perú", "d_code" => "+51"),
    array("code" => "PH", "name" => "Filipinas", "d_code" => "+63"),
    array("code" => "PL", "name" => "Polonia", "d_code" => "+48"),
    array("code" => "PT", "name" => "Portugal", "d_code" => "+351"),
    array("code" => "PR", "name" => "Puerto Rico", "d_code" => "+1787"),
    array("code" => "QA", "name" => "Catar", "d_code" => "+974"),
    array("code" => "CG", "name" => "República del Congo", "d_code" => "+242"),
    array("code" => "RE", "name" => "Reunión", "d_code" => "+262"),
    array("code" => "RO", "name" => "Rumanía", "d_code" => "+40"),
    array("code" => "RU", "name" => "Rusia", "d_code" => "+7"),
    array("code" => "RW", "name" => "Ruanda", "d_code" => "+250"),
    array("code" => "SH", "name" => "Santa Elena", "d_code" => "+290"),
    array("code" => "KN", "name" => "San Cristóbal y Nieves", "d_code" => "+1869"),
    array("code" => "PM", "name" => "San Pedro y Miquelón", "d_code" => "+508"),
    array("code" => "VC", "name" => "San Vicente y las Granadinas", "d_code" => "+1784"),
    array("code" => "WS", "name" => "Samoa", "d_code" => "+685"),
    array("code" => "SM", "name" => "San Marino", "d_code" => "+378"),
    array("code" => "ST", "name" => "Santo Tomé y Príncipe", "d_code" => "+239"),
    array("code" => "SA", "name" => "Arabia Saudita", "d_code" => "+966"),
    array("code" => "SN", "name" => "Senegal", "d_code" => "+221"),
    array("code" => "RS", "name" => "Serbia", "d_code" => "+381"),
    array("code" => "SC", "name" => "Seychelles", "d_code" => "+248"),
    array("code" => "SL", "name" => "Sierra Leona", "d_code" => "+232"),
    array("code" => "SG", "name" => "Singapur", "d_code" => "+65"),
    array("code" => "SK", "name" => "Eslovaquia", "d_code" => "+421"),
    array("code" => "SI", "name" => "Eslovenia", "d_code" => "+386"),
    array("code" => "SB", "name" => "Islas Salomón", "d_code" => "+677"),
    array("code" => "SO", "name" => "Somalia", "d_code" => "+252"),
    array("code" => "ZA", "name" => "Sudáfrica", "d_code" => "+27"),
    array("code" => "KR", "name" => "Corea del Sur", "d_code" => "+82"),
    array("code" => "ES", "name" => "España", "d_code" => "+34"),
    array("code" => "LK", "name" => "Sri Lanka", "d_code" => "+94"),
    array("code" => "LC", "name" => "Santa Lucía", "d_code" => "+1"),
    array("code" => "SD", "name" => "Sudán", "d_code" => "+249"),
    array("code" => "SR", "name" => "Surinam", "d_code" => "+597"),
    array("code" => "SZ", "name" => "Suazilandia", "d_code" => "+268"),
    array("code" => "SE", "name" => "Suecia", "d_code" => "+46"),
    array("code" => "CH", "name" => "Suiza", "d_code" => "+41"),
    array("code" => "SY", "name" => "Siria", "d_code" => "+963"),
    array("code" => "TW", "name" => "Taiwán", "d_code" => "+886"),
    array("code" => "TJ", "name" => "Tayikistán", "d_code" => "+992"),
    array("code" => "TZ", "name" => "Tanzania", "d_code" => "+255"),
    array("code" => "TH", "name" => "Tailandia", "d_code" => "+66"),
    array("code" => "BS", "name" => "Las Bahamas", "d_code" => "+1242"),
    array("code" => "GM", "name" => "Gambia", "d_code" => "+220"),
    array("code" => "TL", "name" => "Timor Oriental", "d_code" => "+670"),
    array("code" => "TG", "name" => "Togo", "d_code" => "+228"),
    array("code" => "TK", "name" => "Tokelau", "d_code" => "+690"),
    array("code" => "TO", "name" => "Tonga", "d_code" => "+676"),
    array("code" => "TT", "name" => "Trinidad y Tobago", "d_code" => "+1868"),
    array("code" => "TN", "name" => "Túnez", "d_code" => "+216"),
    array("code" => "TR", "name" => "Turquía", "d_code" => "+90"),
    array("code" => "TM", "name" => "Turkmenistán", "d_code" => "+993"),
    array("code" => "TC", "name" => "Islas Turcas y Caicos", "d_code" => "+1649"),
    array("code" => "TV", "name" => "Tuvalu", "d_code" => "+688"),
    array("code" => "UG", "name" => "Uganda", "d_code" => "+256"),
    array("code" => "UA", "name" => "Ucrania", "d_code" => "+380"),
    array("code" => "AE", "name" => "Emiratos Árabes Unidos", "d_code" => "+971"),
    array("code" => "GB", "name" => "Reino Unido", "d_code" => "+44"),
    array("code" => "US", "name" => "Estados Unidos", "d_code" => "+1"),
    array("code" => "UY", "name" => "Uruguay", "d_code" => "+598"),
    array("code" => "VI", "name" => "Islas Vírgenes de EE. UU.", "d_code" => "+1340"),
    array("code" => "UZ", "name" => "Uzbekistán", "d_code" => "+998"),
    array("code" => "VU", "name" => "Vanuatu", "d_code" => "+678"),
    array("code" => "VA", "name" => "Ciudad del Vaticano", "d_code" => "+39"),
    array("code" => "VE", "name" => "Venezuela", "d_code" => "+58"),
    array("code" => "VN", "name" => "Vietnam", "d_code" => "+84"),
    array("code" => "WF", "name" => "Wallis y Futuna", "d_code" => "+681"),
    array("code" => "YE", "name" => "Yemen", "d_code" => "+967"),
    array("code" => "ZM", "name" => "Zambia", "d_code" => "+260"),
    array("code" => "ZW", "name" => "Zimbabue", "d_code" => "+263")
];