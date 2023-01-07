<?php

include 'include/connection.php';

$id        = $_POST['id'];
$text      =$_POST['text'];
$title     = $_POST['name'];

$image     = $_FILES['image']['name'];
$target    ="images/".basename($image);



$sql = "UPDATE srevices SET text='$text',title='$title', image='$image' WHERE id='$id'";


$result = $db->query($sql);

if($result){

   if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('Location:services_users.php');

  }
}
