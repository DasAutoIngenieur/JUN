<?php
include("connection.php"); 
$q = "delete from demo where id='{$_GET['id']}'";
$con->query($q);
header('location:demo.php');
?>