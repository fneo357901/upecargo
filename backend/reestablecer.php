<?php
require('db.php');
//require('sendmail.php');
$usr = $_POST['username'];
$sql = sprintf("SELECT email FROM usuarios WHERE email='%s'",$usr);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
//    sendmail_recover($usr);
} else {
    echo "error";
}
$conn->close();
?>