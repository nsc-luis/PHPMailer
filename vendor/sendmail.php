<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'mail.autolineasvillarreal.com.mx';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'cartasdirector@autolineasvillarreal.com.mx';
    $mail->Password = 'Hnm$LfCVoTkQ';
    $mail->setFrom('cartasdirector@autolineasvillarreal.com.mx', 'Cartas al director');
    $mail->addReplyTo('cartasdirector@autolineasvillarreal.com.mx', 'Cartas al director');
    /* $mail->addAddress('???', '???');
    $mail->Subject = '???';
    // $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body = '???';
    // $mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    } */
    echo $_POST['destinatario'] . "<br>";
    echo $_POST['asunto'] . "<br>";
    echo $_POST['mensaje'] . "<br>";
?>