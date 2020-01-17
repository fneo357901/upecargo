<?php
require('db.php');

$id = $_POST['id'];
$pw = $_POST['nw_pw'];
$sql = sprintf("UPDATE usuarios SET pass='%s' WHERE id='%s'",$pw,$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();