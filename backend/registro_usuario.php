<?php
require('db.php');

if($_POST['type']=="shipper"){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$sql = sprintf("INSERT INTO usuarios (nombre, apellido, email, telefono, tipo, empresa_data, pass, subtipo) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s');",$firstname,$lastname,$email,$phone,$type,$company,$password,'');
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
$sql = sprintf("INSERT INTO usuarios (nombre, apellido, email, telefono, tipo, subtipo, pass, empresa_data) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s');",$firstname,$lastname,$email,$phone,$type,$subtype,$password,'null');
$sql = urldecode($sql);
}

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>
