<?php
require('db.php');
ini_set('session.gc_maxlifetime',20);
session_start();
if($_GET['command']=="start_session") {
$username = $_GET['username'];
$sql = sprintf("SELECT * FROM usuarios WHERE email='%s'",$username);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellido'] = $row['apellido'];
    $_SESSION['telefono'] = $row['telefono'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['tipo'] = $row['tipo'];
    }
    echo $_SESSION['tipo'];
} else {
    echo "error";
}
$conn->close();

}

if($_GET['command']=="verify") {
    $content = json_encode($_SESSION);
    if($content!=="[]"){
        echo $content;
    } else {
        echo "error";
    }
}

if($_GET['command']=="destroy") {
    if(session_destroy()) {
        setcookie('account','',time()-100);
        echo "success";
    } else {
        echo "error";
    }
}

?>