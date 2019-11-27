<?php
require('db.php');

/* Getting file name */
$filename = $_FILES['img']['name']; 
  
/* Location */
$location = "../media/".$filename; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['img']['tmp_name'], $location)){ 
   }else{
   } 
} 

makeThumbnails("../media/", $filename);

$id_user = $_POST['user_id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$tipo_unidad = $_POST['tipo_unidad'];
$ubicacion = $_POST['ubicacion'];
$passwordx = $_POST['password'];


$sql = sprintf("INSERT INTO unidades_carrier (img, id_user, nombre, telefono, correo, estado, tipo_unidad, ubicacion, passwordx) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s');",$location, $id_user, $nombre,$telefono,$correo,$estado,$tipo_unidad,$ubicacion,$passwordx);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>