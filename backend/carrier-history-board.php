<?php
require('db.php');

$id_empresa_transporte = $_GET['id'];
$sql = sprintf("SELECT * from ordenes WHERE id_empresa_transporte='%s'",$id_empresa_transporte);
$sql = urldecode($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $consulta[] = $row;
    }
    $view = json_encode($consulta);
    echo $view;
} else {
    echo '[{ data: "Registro Vacio" }]';
}


$conn->close();

?>