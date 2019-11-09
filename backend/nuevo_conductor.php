<?php
require('db.php');
$img = $_POST['img'];
$id_user = $_POST['user_id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];

$sql = sprintf("INSERT INTO unidades_carrier (img, id_user, nombre, telefono, correo, estado) VALUES ('%s','%s','%s','%s','%s','%s');",$img, $id_user, $nombre,$telefono,$correo,$estado);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>