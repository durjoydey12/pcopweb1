<?php
include 'include/connection.php';  

$title      = $_POST['name'];
$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);


$sql = "INSERT INTO outsourcisng2 (title,image) VALUES ('$title ','$image')" ;

$result = $db->query($sql);

if($result){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:outsourcisng2_users.php');
    }
  
   
 
}
else{
    echo "Data insert Fail!";
}




