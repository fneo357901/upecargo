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
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'no-reply@strokcargo.com';                     // SMTP username
    $mail->Password   = 'm5eMg%5D';                               // SMTP password
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
    $mail->Body    = utf8_decode('<!DOCTYPE html PUBLIC><html> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <title></title> <link rel="stylesheet" href="http://'.$_SERVER['HTTP_HOST'].'/mail_template/style.css"> <link rel="stylesheet" href="http://'.$_SERVER['HTTP_HOST'].'/mail_template/fontawesome-free-5.12.0-web/css/all.min.css"> </head> <body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#ececec;"> <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#ececec;"> <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#ececec;" bgcolor="#ececec;"> <tr> <td width="100%"><div class="webkit" style="max-width:600px;Margin:0 auto;"><!--[if (gte mso 9)|(IE)]><table width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0" ><tr><td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" ><![endif]--> <table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;padding-top:30px!important;background-color:#FFF!important;"> <tr> <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"> <table border="0" width="100%" cellpadding="0" cellspacing="0" > <tr> <td> <table style="width:100%;" cellpadding="0" cellspacing="0" border="0"> <tbody> <tr> <td align="center"><center> <table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" style="Margin: 0 auto;"> <tbody> <tr> <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" bgcolor="#FFFFFF"> <table cellpadding="0" cellspacing="0" border="0" width="100%"> <tr> <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;"><!--[if (gte mso 9)|(IE)]> <table width="100%" style="border-spacing:0" > <tr> <td width="20%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" ><![endif]--> <div class="column" style="width:100%;max-width:110px;display:inline-block;vertical-align:top;"> <table class="contents" style="border-spacing:0; width:100%" bgcolor="#ffffff" > <tr> <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" align="left"> <a href="#" target="_blank"><img src="http://'.$_SERVER['HTTP_HOST'].'/mail_template/images/img.svg" width="94" alt="" style="border-width:0; max-width:94px;height:auto; display:block"/></a> </td></tr></table> </div><!--[if (gte mso 9)|(IE)]> </td><td width="80%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" ><![endif]--> <div class="column container-icons" style="width:100%;max-width:415px;display:inline-block;vertical-align:top;"> <table width="30%" style="border-spacing:0" bgcolor="#ffffff" align="right"> <tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="hide"> <tr> <td > <a href="" class="icon"><i class="fab fa-facebook-f" style="padding-left: 9px;"></i></a> </td><td > <a href="" class="icon"><i class="fab fa-twitter"></i></a> </td><td > <a href="" class="icon"><i class="fab fa-instagram"></i></a> </td></tr></table> </td></tr></table> </div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr> <td align="left" style="padding-left:40px"><table border="0" cellpadding="0" cellspacing="0" style="border-bottom:2px solid #FE4D00" align="left"> <tr> <td height="20" width="30" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr></table></td></tr><tr> <td height="30">&nbsp;</td></tr></table></td></tr></tbody> </table> </center></td></tr></tbody> </table></td></tr></table> <table class="one-column" border="0" cellpadding="40" cellspacing="0" width="100%" style="border-spacing:0" bgcolor="#FFFFFF"> <tr> <td align="center"><p style="color:#5b5f65; font-size:18px; text-align:center; font-family: Verdana, Geneva, sans-serif">Haga en el siguiente boton para activar su cuenta</p><center> <table cellpadding="0" cellspacing="0" border="0" width="100%"> <tr> <td><table border="0" cellpadding="0" cellspacing="0"> <tr> <td height="20" width="100%" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr></table> <table border="0" align="center" cellpadding="0" cellspacing="0" style="Margin:0 auto;"> <tbody> <tr> <td align="center"><table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;"> <tr> <td width="250" height="60" align="center" bgcolor="#FE4D00"> <a href="http://'.$_SERVER['HTTP_HOST'].'/backend/activation.php?id='.$row['id'].'" style="width:250; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:18px; font-family: Arial, sans-serif; color: #ffffff; background:#FE4D00" class="button_link"> Haga Click Aqui </a> </td></tr></table></td></tr></tbody> </table> <table border="0" cellpadding="0" cellspacing="0" style="border-bottom:2px solid #FE4D00" align="left"> <tr> <td height="20" width="30" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr></table></td></tr></table> </center> </td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td><table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FE4D00"> <tr> <td height="40" align="center" bgcolor="#FE4D00" class="one-column">&nbsp;</td></tr><tr> <td align="center" bgcolor="#FE4D00" class="one-column" style="padding-top:0;padding-bottom:0;padding-right:10px;padding-left:10px;"> <font style="font-size:13px; text-decoration:none; color:#ffffff; font-family: Verdana, Geneva, sans-serif; text-align:center"> Copyright 2020</font> </td></tr><tr> <td align="center" bgcolor="#FE4D00" class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">&nbsp;</td></tr><tr> <td height="6" bgcolor="#FE4D00" class="contents1" style="width:100%; border-bottom-left-radius:10px; border-bottom-right-radius:10px"></td></tr></table></td></tr></table> </td></tr></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--> </div></td></tr></table></center></body></html>');
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