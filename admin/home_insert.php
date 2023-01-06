<?php
include 'include/connection.php';  
$text       = $_POST['text'];
$title      = $_POST['name'];
$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);


$sql = "INSERT INTO homes (text,title,image) VALUES ('$text ','$title ','$image')" ;

$result = $db->query($sql);

if($result){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:home_users.php');
    }
  
   
 
}
else{
    echo "Data insert Fail!";
}




