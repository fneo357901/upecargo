<?php
require('db.php');
$usr = $_POST['username'];
$pw = $_POST['password'];
$sql = sprintf("SELECT correo, passwordx FROM unidades_carrier WHERE correo='%s' AND passwordx='%s'",$usr,$pw);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
} else {
    echo "error_password";
}
$conn->close();
?>