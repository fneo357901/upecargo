<?php
require('db.php');

if($_POST['type']=="shipper"){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$company = $_POST['company'];
$sql = sprintf("INSERT INTO usuarios (nombre, apellido, email, telefono, tipo, empresa, pass,subtipo,patern_id) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s');",$firstname,$lastname,$email,$phone,$type,$company,$password,'null','0');
$sql = urldecode($sql);
}
if($_POST['type']=="carrier"){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$subtype = $_POST['subtype'];
$sql = sprintf("INSERT INTO usuarios (nombre, apellido, email, telefono, tipo, subtipo, pass,empresa,patern_id) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s');",$firstname,$lastname,$email,$phone,$type,$subtype,$password,'null','0');
$sql = urldecode($sql);
}

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>
