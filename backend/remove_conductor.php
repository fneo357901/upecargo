<?php
require('db.php');
$id = $_POST['id'];
$sql = sprintf("DELETE FROM unidades_carrier WHERE id='%s'",$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>