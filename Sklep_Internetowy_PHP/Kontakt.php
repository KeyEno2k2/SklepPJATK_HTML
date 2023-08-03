<!DOCTYPE html>
<link rel="stylesheet" type = "text/css" href="style.css">

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
<center><h1>Kontakt</h1></center>
<center><h2>Igor Jurewicz - s24309@pjwstk.edu.pl</h2></center>
<center><h2>Mateusz Miotk - Ćwiczeniowiec - mmiotk@pjwstk.edu.pl</h2></center>
<!----------------------------------------------------------------------------------------------->
<!-- LINIA DOLNA -->
<footer class="Topnav" id="Footer" style="margin-top: 501px" >
    <a href="https://pja.edu.pl">Strona Główna PJATK</a>
    <a href="#">Kontakt</a>
    <a href="Źródła.php">Źródła</a>
    <a href="https://github.com/Zajecia-PJATK/projekt_programistyczny-IgorJurewicz">Projekt GIT</a>
    <a href="#" style="float:right">Igor Jurewicz s24309</a>
</footer>

</html>

