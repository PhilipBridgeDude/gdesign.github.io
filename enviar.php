<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <title>i4 - Enviar mensaje</title>
</head>
<body>
    
</body>
</html>

<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $body = "<b>Nombre:</b> ".$nombre."<br><b>Correo:</b> ".$correo ."<br><b>Número telefónico:</b> ".$telefono."<br><b>Asunto:</b> ".$asunto."<br><br><b>Mensaje:</b><br> ".$mensaje;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        /*Server*/
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPKeepAlive = true;
		$mail->Mailer = “smtp”;
        /*Acceso*/
        $mail->Username = 'fpuentes.info@gmail.com';
        $mail->Password = 'Philiptf2-';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        /*Correo cliente*/
        $mail->setFrom($correo, $nombre);
        /*Correo receptor*/
        $mail->addAddress('fpuentes.info@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $body;
        $mail->CharSet = 'UTF-8';

        $mail->send();
        header('Location: index.php?enviado=1');

    } catch (Exception $e) {
        header('Location: index.php?enviado=2');
    }
?>