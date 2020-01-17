<?php
require('db.php');

if($_POST['type']=="shipper"){
/* Getting file name */
$filename_one = $_FILES['img_empresa']['name']; 
  
/* Location */
$location_one = "../media/".$filename_one; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['img_empresa']['tmp_name'], $location_one)){ 
   }else{
   } 
}

/* Getting file name */
$filename_two = $_FILES['img_id_rep']['name']; 
  
/* Location */
$location_two = "../media/".$filename_two; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['img_id_rep']['tmp_name'], $location_two)){ 
   }else{
   } 
}

$_POST['img_one']=$location_one;
$_POST['img_two']=$location_two;

}
if($_POST['type']=="carrier"){
/* Getting file name */
$filename_one = $_FILES['img_empresa']['name']; 
  
/* Location */
$location_one = "../media/".$filename_one; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['img_empresa']['tmp_name'], $location_one)){ 
   }else{
   } 
}

/* Getting file name */
$filename_two = $_FILES['img_id_rep']['name']; 
  
/* Location */
$location_two = "../media/".$filename_two; 
$uploadOk = 1; 
  
if($uploadOk == 0){ 
   echo 0; 
}else{ 
   /* Upload file */
   if(move_uploaded_file($_FILES['img_id_rep']['tmp_name'], $location_two)){ 
   }else{
   } 
}

$_POST['img_one']=$location_one;
$_POST['img_two']=$location_two;
}

$id = $_POST['id'];
$json = "[".json_encode($_POST)."]";
$sql = sprintf("UPDATE usuarios SET empresa_data='%s' WHERE id='%s'",$json,$id);
$sql = urldecode($sql);

if($conn->query($sql)){
    echo "success";
} else {
    printf("Errormessage: %s\n", $conn->error);
}


$conn->close();

?>