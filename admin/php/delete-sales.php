<?php
include("connection.php"); 
$q = "delete from sales where id='{$_GET['id']}'";
$con->query($q);
header('location:sales.php');
?>