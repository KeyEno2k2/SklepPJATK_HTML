<!DOCTYPE html>
<link rel="stylesheet" type = "text/css" href="style.css">
<?php
session_start();
error_reporting(0);
if(empty($_POST['ilosc'])){
    $_POST['ilosc'] = 1;
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        font-family: "Arial";
        background-color: white;
        padding: 0px;
        height: 100%;
        margin:0;
    }

    input[type=text]{
        width: 100%;
        box-sizing: border-box;
        border: 2px black;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/1024px-Search_Icon.svg.png");
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
    }
</style>
<div id="Header">

    <a href="StronaGlowna.php"><img src="https://internetowe.pja.edu.pl/img/logo_header.png" alt="" height="50px" width="300px"></a><h1>$-PJATK</h1>

</div>

<!-- LINKI -->
<ul>
    <li class="spadek">
        <a href="javascript:void(0)" class="joooobtn ">Laptopy i Komputery</a>
        <div class="spadek-content">
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Laptop" name="typ"><input value="Laptopy" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Komputer Stacjonarny" name="typ"><input value="Komputery Stacjonarne" type="submit" class="btn btn-link" ></form>
        </div>

    <li class="spadek">
        <a href="javascript:void(0)" class="joooobtn">Podzespoły Komputerowe</a>
        <div class="spadek-content">
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Procesor" name="typ"><input value="Procesory" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Plyta Glowna" name="typ"><input value="Płyty Główne" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Karta Graficzna" name="typ"><input value="Karty Graficzne" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Zasilacz" name="typ"><input value="Zasilacze" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Obudowa Komputera" name="typ"><input value="Obudowy Komputera" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Dysk SSD" name="typ"><input value="Dyski SSD" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Dysk HDD" name="typ"><input value="Dyski HDD" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Pamiec RAM" name="typ"><input value="Pamięć RAM" type="submit" class="btn btn-link" ></form>
        </div>
    <li class="spadek">
        <a href="javascript:void(0)" class="joooobtn">Urządzenia Peryferyjne</a>
        <div class="spadek-content">
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Mysz" name="typ"><input value="Myszki" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Klawiatura" name="typ"><input value="Klawiatury" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Sluchawki" name="typ"><input value="Słuchawki" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Mikrofon" name="typ"><input value="Mikrofony" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Monitor" name="typ"><input value="Monitory"" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Drukarki" name="typ"><input value="Drukarki" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Skanery" name="typ"><input value="Skanery" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Urzadzenie Wielofunkcyjne" name="typ"><input value="Urządzenia Wielofunkcyjne" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Kontrolery" name="typ"><input value="Kontrolery" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Kamera Internetowa" name="typ"><input value="Kamery Internetowe" type="submit" class="btn btn-link" ></form>
        </div>
    <li class="spadek">
        <a href="javascript:void(0)" class="joooobtn">Akcesoria</a>
        <div class="spadek-content">
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="HUB" name="typ"><input value="HUBy" type="submit" class="btn btn-link" ></form>
            <form method="post" action="ListaProduktow.php" ><input type="hidden" value="Pendrive" name="typ"><input value="Pendrive" type="submit" class="btn btn-link" ></form>
        </div>
    <li class="spadek" style="float: right">
        <?php
        if (isset($_SESSION['Email'])){
            ?>
            <span style="color: white;">Witaj:
            <?php
            echo $_SESSION['Email'];
            ?>
        </span>
            <?php
        }
        ?>
        <?php
        if (isset ($_SESSION['session'])){
            ?>
            <a href="Wyloguj.php">Wyloguj</a>
            <?php
        }
        ?>
    </li>
    <li class="spadek" style="float: right">
        <a href="Koszyk.php">Koszyk</a>
    </li>
    <li>
    </li>
    <li class="spadek" style="float:right">
        <a href="MojeKonto.php" >Moje Konto</a>
    </li>

</ul>
<!----------------------------------------------------------------------------------------------->
<div class="row">
    <?php

    if($_POST['STAN'] < $_POST['ilosc']){
        $_POST['ilosc'] = $_POST['STAN'];
    }else{
        $a = 1;
    }
    ?>
<?php
function create_basket(){
    if(!isset($_SESSION['Basket'])){
        return false;
    } else {
        return true;
    }
}
function refresh($id_basket, $id_produkt){
    $conn = new mysqli('localhost', 'root', 'xxx', 'projektrbd');
    $sql = "SELECT * FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$id_basket." AND Produkty_ID =".$id_produkt;
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        refresh2($id_basket,$id_produkt);
        return true;
    }else{
        return false;
    }
}
function refresh2($id_basket, $id_produkt){
    $conn = new mysqli('localhost', 'root', 'xxx', 'projektrbd');
    $sql = "SELECT * FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$id_basket." AND Produkty_ID =".$id_produkt;
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();
        if( ($_POST['ilosc'] + $row['ilosc']) <= $_POST['STAN']){
        if(isset($_POST['ilosc'])) {
            $sql2 = "UPDATE assoc_koszyk_produkty SET ilosc =".$row['ilosc'] + $_POST['ilosc'];
        }else{
            $sql2 = "UPDATE assoc_koszyk_produkty SET ilosc =".$row['ilosc'] + 1;
        }
        $conn -> query($sql2);
        return true;
    }else{
        return false;
    }
    }else{
        echo "<center><h1>Nie mamy już więcej produktu na stanie !</h1></center>";
    }

}
?>
<?php
function add_basket(){
    if (!create_basket()) {
        $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
        if ($conn -> connect_error) {
            die("Nieudane połączenie " . $conn->connect_error);
        }
        $sql = "INSERT INTO koszyk () VALUES ()";
        $sql2 = "SELECT max(ID) as maks FROM koszyk";
        $conn -> query($sql);
        $result = $conn -> query($sql2);
        if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
        $_SESSION['Basket'] = $row['maks'];
        }
        }
        $conn -> close();

    }
}
function check_ilosc($id){
    $conn2 = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
    $sql4 = "SELECT * FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$_SESSION['Basket']." AND Produkty_ID =".$id;
    $result = $conn2 -> query($sql4);
    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();
        if(($_POST['ilosc'] + $row['ilosc']) >= $_POST['STAN']){
            $conn2 -> close();
            return false;
            }else{
            $conn2 -> close();
            return true;
        }
        }else{
        $conn2 -> close();
        return true;
    }
    }

function add_item($id)
{
    add_basket();
    if(isset($id)){

        if(!refresh($_SESSION['Basket'], $_POST['KOSZYK_ADD'])){
    $conn2 = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
    if ($conn2 -> connect_error) {
        die("Nieudane połączenie " . $conn2->connect_error);
    }
    if(check_ilosc($id)){
        $sql3 = "INSERT INTO assoc_koszyk_produkty VALUES(".$_SESSION['Basket'].",".$id.",".$_POST['ilosc'].")";
        $conn2 -> query($sql3);
            $conn2 -> close();
            }
        }
    }

}
    if(isset($_POST['KOSZYK_ADD'])){
    $_SESSION['KOSZYK_ADD'] = $_POST['KOSZYK_ADD'];
    add_item($_POST['KOSZYK_ADD']);

    }

?>
<?php
function show_basket(){
    if(!isset($_SESSION['Basket'])){
        echo "<center><h1 style='margin-left: 780px'>Twój Koszyk jest Pusty</h1></center>";
    }else if(isset($_SESSION['Basket'])){
    $conn = new mysqli("localhost", "root", "#JebacKurwy1969", "projektrbd");
    $sql = "SELECT p.Nazwa as nazwa,p.Cena as cena, akp.ilosc as ilosc, akp.Produkty_ID as PIT FROM koszyk inner join assoc_koszyk_produkty akp on koszyk.ID = akp.Koszyk_ID inner join produkty p on akp.Produkty_ID = p.ID WHERE Koszyk_ID = ".$_SESSION['Basket'];
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
    ?>
    <table class="table table-striped table-dark" style="margin-right: 15px; margin-left: 15px">
        <thead><tr>
            <th scope="col">
                Nazwa
            </th>
            <th scope="col">
                Cena
            </th>
            <th scope="col">
                Ilość
            </th>

        </tr></thead>
        <tbody>
        <?php
        $cena = 0;
        while ($row = $result -> fetch_assoc()){
            echo "<tr><td>".$row['nazwa']."</td><td>".$row['cena'] * $row['ilosc']. " zł"."</td><td>".$row['ilosc']."</td><td><form action='UsunPrzedmiotyKoszyk.php' method='post' ><input name='PIT' type='hidden' value='".$row['PIT']."'><input type='submit' class='btn btn-danger' value='USUŃ'></form></td></tr>";
            $cena = $cena + ($row['cena'] * $row['ilosc']);
            }
        }
        echo "<tr><td>Do zapłaty: ".$cena." zł</td></tr>";
        }
        }

show_basket();


?>
        </tbody>
    </table>
</div>
<div>
    <?php
    $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
    ?>
    <form method="post" action="KoszykDane.php">
        <center><button name="ZAMOW" style="width: 50%">Zamów</button></center>
    </form>


    <form method="post" action="UsuwanieKoszyka.php">
        <center><button name="USUN" style="width: 50%">Usuń Całą Zawartość Koszyka</button></center>
    </form>
</div>
<!----------------------------------------------------------------------------------------------->
<!-- LINIA DOLNA -->

<footer class="Topnav" id="Footer" style="margin-top: 65px" >
    <a href="https://pja.edu.pl">Strona Główna PJATK</a>
    <a href="Kontakt.php">Kontakt</a>
    <a href="Źródła.php">Źródła</a>
    <a href="https://github.com/Zajecia-PJATK/projekt_programistyczny-IgorJurewicz">Projekt GIT</a>
    <a href="#" style="float:right">Igor Jurewicz s24309</a>
</footer>

</html>


