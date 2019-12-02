<?php
require('db.php');
$id = $_POST['id'];
$stats = $_POST['stats'];
$sql = sprintf("UPDATE ordenes SET stats='%s' WHERE id='%s'",$stats,$id);
$sql = urldecode($sql);

if($conn->query($sql)){

    echo "success";
        
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();
?>