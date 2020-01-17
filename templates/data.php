<?php 

require('../backend/db.php');

$orden = $_GET['orden_id'];
$usr = $_GET['usr_id'];

$sql = sprintf("SELECT * FROM ordenes WHERE id='%s'",$orden);
$sql2 = sprintf("SELECT * FROM unidades_carrier WHERE id='%s'",$usr);
$sql = urldecode($sql);
$sql2 = urldecode($sql2);

$result = $conn->query($sql);
$result2 = $conn->query($sql2);