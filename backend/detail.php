<?php
require('db.php');

$id = $_GET['id'];
$sql = sprintf("SELECT * from ordenes WHERE id='%s'",$id);
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