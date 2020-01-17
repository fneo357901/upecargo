<?php
require('db.php');

/* Getting file name */
$filename_profile = $_FILES['profile']['name']; 
  
/* Location */
$location_profile = "../media/".$filename_profile; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['profile']['tmp_name'], $location_profile)){ 
   }else{
   } 
} 

/* Getting file name */
$filename_PUR = $_FILES['PUR_img']['name']; 
  
/* Location */
$location_PUR = "../media/".$filename_PUR; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['PUR_img']['tmp_name'], $location_PUR)){ 
   }else{
   } 
} 

/* Getting file name */
$filename_TC = $_FILES['TC_img']['name']; 
  
/* Location */
$location_TC = "../media/".$filename_TC; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['TC_img']['tmp_name'], $location_TC)){ 
   }else{
   } 
} 

/* Getting file name */
$filename_PSP = $_FILES['PSP_img']['name']; 
  
/* Location */
$location_PSP = "../media/".$filename_PSP; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['PSP_img']['tmp_name'], $location_PSP)){ 
   }else{
   } 
} 

/* Getting file name */
$filename_LC = $_FILES['LC_img']['name']; 
  
/* Location */
$location_LC = "../media/".$filename_LC; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['LC_img']['tmp_name'], $location_LC)){ 
   }else{
   } 
} 


/* Getting file name */
$filename_TF = $_FILES['TF_img']['name']; 
  
/* Location */
$location_TF = "../media/".$filename_TF; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['TF_img']['tmp_name'], $location_TF)){ 
   }else{
   } 
} 

/* Getting file name */
$filename_TCV = $_FILES['TCV_img']['name']; 
  
/* Location */
$location_TCV = "../media/".$filename_TCV; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['TCV_img']['tmp_name'], $location_TCV)){ 
   }else{
   } 
}

$id_user = $_POST['user_id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$tipo_unidad = $_POST['tipo_unidad'];
$ubicacion = $_POST['ubicacion'];
$passwordx = $_POST['password'];

$PUR_id = $_POST['PUR'];
$TC_id = $_POST['TC'];
$PSP_id = $_POST['PSP'];
$LC_id = $_POST['LC'];
$TF_id = $_POST['TF'];
$TCV_id = $_POST['TCV'];


$sql = sprintf("INSERT INTO unidades_carrier (img, id_user, nombre, telefono, correo, estado, tipo_unidad, ubicacion, passwordx, PUR_id, TC_id, PSP_id, LC_id, TF_id, TCV_id, PUR_img, TC_img, PSP_img, LC_img, TF_img, TCV_img) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');",$location_profile, $id_user, $nombre,$telefono,$correo,$estado,$tipo_unidad,$ubicacion,$passwordx,$PUR_id, $TC_id, $PSP_id, $LC_id, $TF_id, $TCV_id, $location_PUR, $location_TC, $location_PSP, $location_LC, $location_TF, $location_TCV);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>