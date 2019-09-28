<?php
require('db.php');
$id = $_POST['id'];
$sql = sprintf("DELETE FROM conductores WHERE id='%s'",$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    echo "error";
}


$conn->close();

?>