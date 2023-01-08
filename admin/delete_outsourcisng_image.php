<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM outsourcisng_images WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:outsourcisng_image_users.php');

