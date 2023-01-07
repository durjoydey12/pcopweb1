<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM outsourcisng2 WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:outsourcisng2_users.php');

