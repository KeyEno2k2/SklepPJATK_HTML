<!DOCTYPE html>
<link rel="stylesheet" type = "text/css" href="style.css">
<?php
@include 'sql.inc.php';
session_start();
?>
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

    input[type=kuchnia]{
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
<!-- PANEL ADMINISTRATORA -->

            <div class="text-center mt-5">
                <form action="loginval.php" method="post" class="mt-5 border p-4 bg-light shadow" style="max-width: 450px; margin: auto;">
                    <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>
                    <label for="emailAdress" class="sr-only">Nazwa Użytkownika</label>
                    <input type="email" name="Email" id="emailAdress" class="form-control" placeholder="Email" required autofocus>
                    <label for="password" class="sr-only">Hasło</label>
                    <input type="password" name="Haslo" id="password" placeholder="Hasło" class="form-control" required autofocus>
                    <div class="mt-3">
                        <button class="btn btn-lg btn-primary btn-block">Zaloguj</button>
                    </div>
                </form>
            </div>
<center><h1>
<?php
if (isset ($_SESSION['info'])){
    echo $_SESSION['info'];
    unset ($_SESSION['info']);
}
if (isset ($_SESSION['error'])){
    echo $_SESSION['error'];
    unset ($_SESSION['error']);
}

?>
</h1></center>
        <div class="text-center mt-5">
             <form action="registerval.php" method="post" class="mt-5 border p-4 bg-light shadow" style="max-width: 450px; margin: auto;">
                    <h1 class="h3 mb-3 font-weight-normal">Rejestracja</h1>

                    <label for="Imie" class="sr-only">Imie</label>
                    <input name="Imie" type="text" id="imie" class="form-control" placeholder="Imie" required autofocus>

                    <label for="emailAdress" class="sr-only">Nazwa Użytkownika</label>
                    <input name="Email" type="email" id="emailAdress" class="form-control" placeholder="Email" required autofocus>

                    <label for="password" class="sr-only">Hasło</label>
                    <input name="Haslo" type="password" id="password" placeholder="Hasło" class="form-control" required autofocus>

                    <label for="password" class="sr-only">Hasło</label>
                    <input name="Haslo2" type="password" id="password" placeholder="Powtórz Hasło" class="form-control" required autofocus>

                    <div class="mt-3">
                        <button class="btn btn-lg btn-primary btn-block">Zarejestruj</button>
                    </div>
             </form>
        </div>

<!----------------------------------------------------------------------------------------------->
<!-- LINIA DOLNA -->
<footer class="Topnav" id="Footer" style="margin-top: 65px" >
    <a href="https://pja.edu.pl">Strona Główna PJATK</a>
    <a href="Kontakt.php">Kontakt</a>
    <a href="Źródła.php">Źródła</a>
    <a href="https://github.com/Zajecia-PJATK/projekt_programistyczny-IgorJurewicz">Projekt GIT</a>
    <a href="PAModyfikacja.php" style="float:right">Igor Jurewicz s24309</a>
</footer>

</html>

