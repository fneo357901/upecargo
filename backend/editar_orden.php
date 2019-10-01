<?php
require('db.php');
$id = $_POST['id'];
$id_user = $_POST['id_user'];
$status = $_POST['status'];
$presupuesto = $_POST['presupuesto'];
$busqueda = $_POST['busqueda'];
$entrega = $_POST['entrega'];
$fecha_recogida = $_POST['fecha_recogida'];
$fecha_entrega = $_POST['fecha_entrega'];
$transport_type = $_POST['transport_type'];
$carga = $_POST['carga'];
$requisitos = $_POST['requisitos'];
$advertencias = $_POST['advertencias'];
$sql = sprintf("UPDATE ordenes SET id_user='%s', stats='%s', presupuesto='%s', busqueda='%s', entrega='%s', fecha_recogida='%s', fecha_entrega='%s', transport_type='%s', carga='%s', requisitos='%s', advertencias='%s' WHERE id='%s'",$id_user,$status,$presupuesto,$busqueda,$entrega,$fecha_recogida,$fecha_entrega,$transport_type,$carga,$requisitos,$advertencias,$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>