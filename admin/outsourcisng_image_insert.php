<?php
include 'include/connection.php';  


$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);


$sql = "INSERT INTO outsourcisng_images (image) VALUES ('$image')" ;

$result = $db->query($sql);

if($result){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:outsourcisng_image_users.php');
    }
  
   
 
}
else{
    echo "Data insert Fail!";
}
