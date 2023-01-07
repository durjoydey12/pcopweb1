<?php
include 'include/connection.php';  

$title      = $_POST['name'];
$text       = $_POST['text'];
$image      = $_FILES['image']['name'];
$target     ="images/".basename($image);


$sql = "INSERT INTO srevices(text,title,image) VALUES ('$text ','$title ','$image')" ;

$result = $db->query($sql);

if($result){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:services_users.php');
    }
  
   
 
}
else{
    echo "Data insert Fail!";
}







