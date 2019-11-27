<?php
require('db.php');
ini_set('session.gc_maxlifetime',20);
session_start();
if($_GET['command']=="start_session") {
$username = $_GET['username'];
$sql = sprintf("SELECT * FROM unidades_carrier WHERE correo='%s'",$username);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['telefono'] = $row['telefono'];
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['ubicacion'] = $row['ubicacion'];
    $_SESSION['tipo_unidad'] = $row['tipo_unidad'];
    $_SESSION['estado'] = $row['estado'];    
    }
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
        setcookie('account_conductor','',time()-100);
        echo "success";
    } else {
        echo "error";
    }
}

?>