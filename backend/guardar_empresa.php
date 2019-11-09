<?php
require('db.php');
$id = $_POST['id'];
$json = "[".$_POST['json']."]";
$sql = sprintf("UPDATE usuarios SET empresa_data='%s' WHERE id='%s'",$json,$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>