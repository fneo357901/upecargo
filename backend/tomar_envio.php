<?php
require('db.php');
$id = $_POST['id'];
$id_empresa_transporte = $_POST['id_empresa_transporte'];
$stats = $_POST['stats'];
$id_unidad = $_POST['id_unidad'];
$sql = sprintf("UPDATE ordenes SET id_empresa_transporte='%s', stats='%s', id_unidad='%s' WHERE id='%s'",$id_empresa_transporte,$stats,$id_unidad,$id);
$sql = urldecode($sql);

if($conn->query($sql)){

    $sql = sprintf("UPDATE unidades_carrier SET estado='%s' WHERE id='%s'","en_camino",$id_unidad);
    $sql = urldecode($sql);
    
    if($conn->query($sql)){
        echo "success";
    } else {
        printf("Errormessage: %s\n", $conn->error);
    }
        
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();
?>