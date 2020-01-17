<?php
require('db.php');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

$account = $_POST['email'];

$sql = sprintf("SELECT * FROM usuarios WHERE email='%s'",$account);
$sql = urldecode($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                     // SMTP username
    $mail->Password   = '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';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@strokcargo.com', 'STROKCARGO');
    $mail->addAddress($row['email']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@strokcargo.com', 'STROKCARGO');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Activacion de Cuenta';
    $mail->Body    = 'Haga en el siguiente enlace para activar su cuenta: <br/> <a href="http://'.$_SERVER['HTTP_HOST'].'/backend/activation.php?id='.$row['id'].'" target="_blank">HAGA CLICK AQUI</a>';
    $mail->AltBody = 'Habra el siguiente enlace para activar su cuenta: http://'.$_SERVER['HTTP_HOST'].'/backend/activation.php?id='.$row['id'];

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "El correo no pudo ser enviado. Error: {$mail->ErrorInfo}";
}
}
} else {
    echo "La cuenta no existe.";
}
$conn->close();