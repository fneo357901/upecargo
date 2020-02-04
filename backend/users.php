<?php
require('db.php');

header('Content-type: application/json; charset=utf-8');

$sql = sprintf("SELECT id, email from usuarios WHERE tipo='shipper'");
$sql = urldecode($sql);

$result = $conn->query($sql);

$i = -1;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $i++;
        $consulta[$i]['id'] = $row['id'];
        $consulta[$i]['name'] = $row['email'];
    }
    $view = json_encode($consulta);
    echo $view;
} else {
    echo '[{ data: "Registro Vacio" }]';
}


$conn->close();

?>