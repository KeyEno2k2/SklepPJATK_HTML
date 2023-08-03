<?php
session_start();
if(isset($_POST['USUN'])){
    $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
    $sql2 = "DELETE FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$_SESSION['Basket'];
    $sql = "DELETE FROM koszyk WHERE ID =".$_SESSION['Basket'];
    if ($conn -> query($sql2) && $conn -> query($sql) === TRUE){
        unset ($_SESSION['Basket']);
        header("location:StronaGlowna.php");
    }else{
        echo "Błąd Usuwania";
    }
}
?>