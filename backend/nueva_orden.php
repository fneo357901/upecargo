<?php
require('db.php');

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
$sql = sprintf("INSERT INTO ordenes (id_user, id_unidad, id_empleado, id_empresa_transporte, stats, presupuesto, busqueda, entrega, fecha_recogida, fecha_entrega, transport_type, carga, requisitos, advertencias, latitud, longitud, tiempo) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');", $id_user, '0','0','0', $status, $presupuesto, $busqueda, $entrega, $fecha_recogida, $fecha_entrega, $transport_type, $carga, $requisitos, $advertencias, '0', '0', '0');
$sql = urldecode($sql);
//echo $sql;

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>
