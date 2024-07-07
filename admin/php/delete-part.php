<?php
include("connection.php"); 
$q = "delete from parts where id='{$_GET['id']}'";
$con->query($q);
header('location:parts.php');
?>