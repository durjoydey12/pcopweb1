<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM Outsourcisng4 WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:Outsourcisng_enterprise_users.php');

