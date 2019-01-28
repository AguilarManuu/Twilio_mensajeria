<!DOCTYPE html>
<html>
<head>
	<title>Twilio</title>
</head>
<body>


<?php
/* Se ejecuta con:
* http://localhost/twilio-php/
*/


require __DIR__ . '/Twilio/autoload.php';

use Twilio\Rest\Client;

$sid = 'Tu_sid_que_te_proporciono_Twilio_al_registrarte';
$token = 'El_token_que_te_proporciono_twilio_al_registrarte';
$client = new Client($sid, $token);
$mensaje = $client->messages->create(
    '+52961708.....', // Número a donde deseas enviar el mensaje -Destino-
    array(
        'from' => 'El_Numero_que_te_proporciono_Twilio_al_registrarte',
        'body' => "Tu_mensaje"
    )
);
echo "Solicitud de mensaje enviado SID: ".$mensaje->sid;
?>
</body>
</html>