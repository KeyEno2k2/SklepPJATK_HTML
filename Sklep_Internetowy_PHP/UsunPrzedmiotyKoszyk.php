<?php
session_start();
include ("Database.php");
$db = new Database();

if (isset($_POST['PIT'])){
    $sql = "DELETE FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$_SESSION['Basket']." AND Produkty_ID =".$_POST['PIT'];
}
if($db -> delete($sql) === TRUE){
    header("location:Koszyk.php");
}else{
    echo $db -> delete($sql);
}

?>
