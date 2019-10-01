<?php
require('db.php');

$stats = $_GET['stats'];
$sql = sprintf("SELECT * from ordenes WHERE stats='%s'",$stats);
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