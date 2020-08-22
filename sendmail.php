<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;

    // PARAMETROS DEL CORREO
    $mail->Host = '[SERVIDOR_SMTP]';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = '[CORREO_COMPLETO]';
    $mail->Password = '[PASSWORD]';
    $mail->setFrom('[CORREO_COMPLETO]', 'Cartas al director');
    $mail->addReplyTo('[CORREO_COMPLETO]', 'Cartas al director');
    // $mail->addAddress($_POST['destinatario'], 'Destinatario');

    $destinatarios = explode(";", $_POST['destinatario']);
    $i = 0;
    foreach($destinatarios as $destinatario) {
        $mail->addAddress($destinatario, 'Destinatario' . $i);
        $i++;
    }

    $mail->Subject = $_POST['asunto'];
    // $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body = $_POST['mensaje'];
    // $mail->addAttachment('test.txt');

    // VALIDANDO ENVIO
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    }
?>