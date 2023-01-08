<?php
include 'include/connection.php';  
$text       = $_POST['text'];
$title      = $_POST['name'];



$sql = "INSERT INTO outsourcisng4 (text,title) VALUES ('$text ','$title')" ;

$result = $db->query($sql);

if($result){
   
        header('Location:outsourcisng_enterprise_users.php');
    }
  
   
 

else{
    echo "Data insert Fail!";
}




