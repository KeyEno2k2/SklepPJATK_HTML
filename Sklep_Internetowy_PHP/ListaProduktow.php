<!DOCTYPE html>
<link rel="stylesheet" type = "text/css" href="style.css">
<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: "Arial";
            background-color: white;
            padding: 0px;
            height: max-content;
            margin:0px;

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
</head>


<body>
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
<div id="Betoniarka">
    <form action="" method="post">
        <select name="CENA">
            <option value="ASC">Sortuj Rosnąco</option>
            <option value="DESC">Sortuj Malejąco</option>
        </select>
        <input type="submit" value="Sortuj">
    </form>
    <form action="" method="post">
        <input type="number" name="OD" placeholder="Ustaw cenę OD">
        <input type="number" name="DO" placeholder="Ustaw cenę DO">
        <input type="submit" value="Szukaj">
    </form>


    <?php
    if (isset($_POST['typ'])){
        $_SESSION['typ'] = $_POST['typ'];
    }
    
    ?>
    <?php
    if (isset($_SESSION['Produkt']) && isset($_SESSION['Produkt_TYP'])){
        unset($_SESSION['Produkt']);
        unset($_SESSION['Produkt_TYP']);
    }
    $conn = new mysqli("localhost", "root","xxx","projektrbd");
    $sql = "SELECT * FROM typ WHERE Rodzaj = '".$_SESSION['typ']."'";
    $result = $conn -> query($sql);

        if ($result -> num_rows > 0 )
            $jajko = $result -> fetch_assoc();
        $conn -> close();
        if(isset($_POST['OD'])){
    if(($_POST['OD'] > $_POST['DO'])){
        $a = $_POST['DO'];
        $_POST['DO'] = $_POST['OD'];
        $_POST['OD'] = $a;
    }
        }
    $conn = new mysqli("localhost", "root","xxx","projektrbd");
    if (isset($_POST['CENA'])){
        $sql = "SELECT * FROM produkty inner join typ on typ.id = Typ_ID WHERE TYP_ID = '" .$jajko['ID']."' ORDER BY Cena ".$_POST['CENA'];

    }else if (isset($_POST['OD']) && (isset($_POST['DO'])) && !empty($_POST['DO']) && !empty($_POST['OD']) ){
        $sql = "SELECT * FROM produkty inner join typ on typ.id = Typ_ID WHERE TYP_ID = '" . $jajko['ID']. "' AND Cena >= ".$_POST['OD']." AND Cena <=".$_POST['DO'];
    }else if (isset($_POST['OD']) && empty($_POST['DO'])){
        $sql = "SELECT * FROM produkty inner join typ on typ.id = Typ_ID WHERE TYP_ID = '" . $jajko['ID']. "' AND Cena >= ".$_POST['OD'];
    }else if ((isset($_POST['DO'])) && empty($_POST['OD'])){
        $sql = "SELECT * FROM produkty inner join typ on typ.id = Typ_ID WHERE TYP_ID = '" . $jajko['ID']. "' AND Cena <= ".$_POST['DO'];
    }else {
        $sql = "SELECT * FROM produkty inner join typ on typ.id = Typ_ID WHERE TYP_ID = '" . $jajko['ID'] . "'";
    }
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0 ) {
        while ($row = $result->fetch_assoc()){
            echo "<div class=".'"item"'.">"."<form action='Produkt.php' method='post'><input type='hidden' name='jajeczko' value='".$row['ID']."'></input><input type='submit' class='h1 btn btn-link' name='jajeczko2' value='".$row['Nazwa']."'></input></form>"."<h3>".$row['Cena']." zł"."</h3>"."<img src =".$row['Zdjecie_URL']."> </div>";
        }
    }
    ?>
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
</>
</body>
</html>

