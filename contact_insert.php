<?php
include 'include/connection.php';  

$name       = $_POST['name'];
$email      = $_POST['email'];

$mobile_no  = $_POST['mobile_no'];
$message    = $_POST['text'];
// $image      = $_FILEST['image']['name'];
// $target     ="images/users/".basename($image);

$sql = "INSERT INTO contacts(name,email,mobile_no,message) VALUES ('$name','$email','$mobile_no','$message')" ;

$result = $db->query($sql);

if($result){
    header('Location:admin/contact_users.php');
}
else{
    echo "Data insert Fail!";
}




