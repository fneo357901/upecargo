<?php
require('db.php');
$usr = $_POST['username'];
$pw = $_POST['password'];
$sql = sprintf("SELECT * FROM usuarios WHERE email='%s' AND pass='%s' AND verified='1'",$usr,$pw);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
} else {
    echo "error_password";
}
$conn->close();
?>