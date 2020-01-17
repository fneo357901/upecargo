<?php
require('db.php');

$id = $_GET['id'];
$sql = sprintf("UPDATE usuarios SET verified='1' WHERE id='%s'",$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    header('Location: /login');
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();