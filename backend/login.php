<?php
require('db.php');
$usr = $_POST['username'];
$pw = $_POST['password'];
$sql = sprintf("SELECT email, pass FROM usuarios WHERE email='%s' AND pass='%s'",$usr,$pw);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
} else {
    echo "error_password";
}
$conn->close();
?>