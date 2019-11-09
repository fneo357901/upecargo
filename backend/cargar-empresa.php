<?php
require('db.php');

$id = $_GET['id'];
$sql = sprintf("SELECT empresa_data from usuarios WHERE id='%s'",$id);
$sql = urldecode($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['empresa_data'];
    }

} else {
    echo '[{ data: "Registro Vacio" }]';
}


$conn->close();

?>