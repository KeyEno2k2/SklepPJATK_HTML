<?php
session_start();
include ("Database.php");
$db = new Database();

if(isset($_POST['OPINIA'])){
$baraki = htmlentities($_POST['OPINIA']);
$sql = "INSERT INTO opinie (Produkty_ID, Opinia) VALUES "."(".$_POST['id'].",'".$baraki."')";
$db ->insert($sql);
header("location:Produkt.php");
}
?>
