<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM developers WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:developer_users.php');

