<?php
require('db.php');
$id = $_POST['id'];
$estado = $_POST['estado'];
$sql = sprintf("UPDATE unidades_carrier SET estado='%s' WHERE id='%s'",$estado,$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    echo "error";
}


$conn->close();

?>