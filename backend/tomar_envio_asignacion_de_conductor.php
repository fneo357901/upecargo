<?php
require('db.php');
$id = $_POST['id'];
$u_id = $_POST['u_id'];
$c_id = $_POST['c_id'];
$sql = sprintf("UPDATE ordenes SET stats='warning', id_unidad='%s', id_empresa_transporte='%s' WHERE id='%s'",$u_id,$c_id,$id);
$sql = urldecode($sql);

if($conn->query($sql)){

    echo "success";
        
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();
?>