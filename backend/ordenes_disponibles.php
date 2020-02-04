<?php
require('db.php');

$ubicacion = $_GET['ubicacion'];
$tipo_unidad = $_GET['tipo_unidad'];
$sql = sprintf("SELECT * from ordenes WHERE busqueda LIKE '%%%s%%' AND stats='danger' AND transport_type='%s'",$ubicacion,$tipo_unidad);
$sql = urldecode($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $consulta[] = $row;
    }
    $view = json_encode($consulta);
    echo $view;
}


$conn->close();

?>