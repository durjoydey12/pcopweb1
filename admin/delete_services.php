<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM srevices WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:services_users.php');

