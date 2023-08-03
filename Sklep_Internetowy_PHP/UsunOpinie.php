<?php
session_start();
include ("Database.php");
$db = new Database();

$sql = "DELETE FROM opinie WHERE ID =".$_POST['DELETE'];
$db -> delete($sql);
header("location:UsuwanieOpini.php");
?>
