<?php

include 'include/connection.php';

$id        = $_POST['id'];



$image     = $_FILES['image']['name'];
$target    ="images/".basename($image);



$sql = "UPDATE outsourcisng_images SET image='$image' WHERE id='$id'";


$result = $db->query($sql);

if($result){

   if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('Location:outsourcisng_image_users.php');
  }
}
