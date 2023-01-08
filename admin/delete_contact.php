<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM contacts WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:contact_users.php');

