<?php
$orden = $_POST['orden_id'];
$usr = $_POST['usr_id'];

//Sino funciona, usar curl

file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/backend/print.php?type=factura&orden_id='.$orden.'&usr_id='.$usr);
file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/backend/print.php?type=carta_porte&orden_id='.$orden.'&usr_id='.$usr);
file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/backend/print.php?type=manifiesto&orden_id='.$orden.'&usr_id='.$usr);


require('../backend/db.php');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../backend/PHPMailer/vendor/autoload.php';

$sql = sprintf("SELECT * FROM unidades_carrier WHERE id='%s'",$usr);
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
    $mail->addAddress($row['correo']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@strokcargo.com', 'STROKCARGO');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('../tmp/factura-'.$orden.'_'.$usr.'.pdf');         // Add attachments
    $mail->addAttachment('../tmp/carta_porte-'.$orden.'_'.$usr.'.pdf');         // Add attachments
    $mail->addAttachment('../tmp/manifiesto-'.$orden.'_'.$usr.'.pdf');         // Add attachments
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Documentacion de Orden #'.$orden;
    $mail->Body    = 'La documentacion requerida a sido generada a partir de la orden y a sido adjuntada al pie de este correo electronico, si requiere mayor informacion, comuniquese a los siguientes numeros de contacto: +506 00000000 / +506 1111111111';
    $mail->AltBody = 'La documentacion requerida a sido generada a partir de la orden y a sido adjuntada al pie de este correo electronico, si requiere mayor informacion, comuniquese a los siguientes numeros de contacto: +506 00000000 / +506 1111111111';

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