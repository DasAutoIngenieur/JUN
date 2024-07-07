<?php
include("connection.php"); 
$q = "delete from service where id='{$_GET['id']}'";
$con->query($q);
header('location:service.php');
?>