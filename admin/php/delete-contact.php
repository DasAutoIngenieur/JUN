<?php
include("connection.php"); 
$q = "delete from contact where id='{$_GET['id']}'";
$con->query($q);
header('location:contact.php');
?>