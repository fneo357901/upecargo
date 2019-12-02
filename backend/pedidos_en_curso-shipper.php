<?php
require('db.php');

$stats = $_GET['stats'];
$id_empresa_transporte = $_GET['id'];
$sql = sprintf("SELECT id, carga, latitud, longitud from ordenes WHERE id_user='%s' AND stats='%s'",$id_empresa_transporte,$stats);
$sql = urldecode($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $consulta[$i]['lat'] = $row['latitud'];
        $consulta[$i]['lng'] = $row['longitud'];
        $consulta[$i]['title'] = "Carga: ".$row['carga'];
        $i++;
    }
    $view = json_encode($consulta);
    echo $view;
} else {
    echo '[{ data: "Registro Vacio" }]';
}
header('Content-Type: application/json');

$conn->close();

?>