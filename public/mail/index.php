<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ies.grupohydraunisangil.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'registro@ies.grupohydraunisangil.com';
    $mail->Password = 'm2?WroJF3=_E';
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('registro@ies.grupohydraunisangil.com', 'IES Unisangil');
    $mail->addAddress($_GET['correo']);
    $mail->addReplyTo('ies@unisangil.edu.co', 'IES unisangil');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Gracias por registrarte';
    $mail->Body    = '
        <h2>Gracias por Pre-registrarte al IES Unisangil 2017</h2>
        <p><strong><em>Recuerda:</em></strong></p>
        <p><strong>*&nbsp;</strong>Fecha limite de pago: 21 de Septiembre de 2017.</p>
        <p><strong>*&nbsp;</strong>Una vez realices el pago, debes dejar copia del recibo en&nbsp;<strong>Tesorer&iacute;a de Unisangil</strong>, adjuntando tu direcci&oacute;n de correo electr&oacute;nico con el cu&aacute;l te registraste, para enviarte el codigo de acceso a las conferencias y as&iacute; quedar inscrito al IES Unisangil 2017.</p>
        <p><strong>*&nbsp;</strong>Tan pronto se genere tu c&oacute;digo de acceso recibir&aacute;s un correo de confirmaci&oacute;n. Podras visualizar t&uacute; c&oacute;digo ingresando a la aplicaci&oacute;n.</p>
        <p><a href="https://play.google.com/store/apps/details?id=com.unisangil.ies" target="_blank" rel="noopener">Descarga la App</a></p>
        <p>&nbsp;</p>
    ';

    $mail->send();

    echo 'exito';
} catch (Exception $e) {
    echo 'error';
}

/*$URL = "rutadelservidor/rutadelapi?correo=elcorreo";

$peticion = curl_init();

curl_setopt($peticion, CURLOPT_URL, $URL);
curl_setopt($peticion, CURLOPT_HTTPGET, TRUE);
curl_setopt($peticion, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($peticion, CURLOPT_SSLVERSION, 6);
curl_setopt($peticion, CURLOPT_RETURNTRANSFER, 1);

$respuesta = curl_exec($peticion);

if($respuesta == "exito")
    //el correo se envio
else
    // el correo no se envio */