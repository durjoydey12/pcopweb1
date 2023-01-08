<?php

include 'include/connection.php';

$id        = $_POST['id'];
$text      =$_POST['text'];
$title     = $_POST['name'];




$sql = "UPDATE outsourcisng4 SET text='$text',title='$title' WHERE id='$id'";


$result = $db->query($sql);

if($result){

  
      header('Location:outsourcisng_enterprise_users.php');
  }

