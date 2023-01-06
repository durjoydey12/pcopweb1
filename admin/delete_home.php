<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM homes WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:home_users.php');

