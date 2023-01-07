<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM gallerys WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:gallery_users.php');

