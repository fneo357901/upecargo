<?php
require('db.php');
$id = $_POST['id'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$tiempo = $_POST['tiempo'];
$sql = sprintf("UPDATE ordenes SET latitud='%s', longitud='%s', tiempo='%s' WHERE id='%s'",$latitud,$longitud,$tiempo,$id);
$sql = urldecode($sql);

if($conn->query($sql)){

    echo "success";
        
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();
?>