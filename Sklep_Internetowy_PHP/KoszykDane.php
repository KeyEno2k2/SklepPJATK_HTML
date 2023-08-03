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
</head>
<style>
    body {
        font-family: "Arial";
        background-color: white;
        padding: 0px;
        height: 100%;
        margin:0;
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
<?php
if(isset($_SESSION['ERROR1'])){
    echo "<center><h1>".$_SESSION['ERROR1']."</h1></center>";
    unset($_SESSION['ERROR1']);
}
?>
<div class="text-center">
    <form action="" method="post" class="mt-5 mb-5 border p-4 bg-light shadow" style="max-width: 1400px; margin: auto;">
            <h3 class="mb-4 text-seconadry">Podaj Dane do Przesyłki:</h3>
            <div class="mb-3 col-md">
                <input type="text" name="IMIE" class="form-control" placeholder="Imie">
            </div>
            <div class="mb-3 col-md">
                <input type="text" name="NAZWISKO" class="form-control" placeholder="Nazwisko">
            </div>
            <div class="mb-3 col-md">
                <input type="text" name="ULICA" class="form-control" placeholder="Ulica">
            </div>
            <div class="mb-3 col-md">
                <input type="text" name="NR_DOMU" class="form-control" placeholder="Nr Domu">
            </div>
            <div class="mb-3 col-md">
                <input type="text" name="NR_MIESZKANIA" class="form-control" placeholder="Nr Mieszkania">
            </div>
            <div class="mb-3 col-md">
                <input type="text" name="MIEJSCOWOSC" class="form-control" placeholder="Miejscowość">
            </div>


            <h3 class="mb-4 text-secondary">Wybierz Wojewodztwo:</h3>
            <select class="form-select-lg mb-3" name="WOJEWODZTWO">
            <?php
                $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
                $sql = "SELECT * FROM wojewodztwo";
                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        $typ = $row['ID'];
                        echo "<option value='$typ'>".$row['Wybor']."</option>";
                    }
                }
            ?>
            </select>

            <h3 class="mb-4 text-secondary">Wybierz Rodzaj Płatności:</h3>
            <select class="form-select-lg mb-3" name="PLATNOSC">
                <?php
                $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
                $sql = "SELECT * FROM rodzaj_platnosci";
                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        $typ = $row['ID'];
                        echo "<option value='$typ'>".$row['Wybor']."</option>";
                    }
                }
                ?>
            </select>

            <h3 class="mb-4 text-secondary">Wybierz Rodzaj Dostawy:</h3>
            <select class="form-select-lg mb-3" name="DOSTAWA">
                <?php
                $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
                $sql = "SELECT * FROM dostawa";
                $result1 = $conn -> query($sql);

                if($result1 -> num_rows > 0){
                    while ($row = $result1 -> fetch_assoc()){
                        $typ = $row['ID'];
                        echo "<option value='$typ'>".$row['Rodzaj']."</option>";
                    }
                }
                ?>
            </select>

    <div class="mt-3">
        <?php
        $conn = new mysqli('localhost', 'root', '#JebacKurwy1969', 'projektrbd');
        if (isset($_POST['IMIE']) && ($_POST['NAZWISKO']) && ($_POST['ULICA']) && ($_POST['NR_DOMU']) && ($_POST['NR_MIESZKANIA']) && ($_POST['WOJEWODZTWO']) && ($_POST['MIEJSCOWOSC'])) {
            if ((empty($_POST['IMIE']) || empty($_POST['NAZWISKO']) || empty($_POST['ULICA']) || empty($_POST['NR_DOMU']) || empty($_POST['NR_MIESZKANIA']) || empty($_POST['WOJEWODZTWO']) || empty($_POST['MIEJSCOWOSC']))) {
                echo "<h1>Wprowadź Wszystkie Dane !!!</h1>";
            } else {
                $sql3 = "SELECT Produkty_ID, ilosc FROM assoc_koszyk_produkty WHERE Koszyk_ID =".$_SESSION['Basket'];

                $sql = "INSERT INTO zamowienie(Dostawa_ID,Rodzaj_Platnosci_ID,Imie,Nazwisko,Ulica,Nr_Domu,Nr_Mieszkania,Wojewodztwo_ID,Miejscowosc) VALUES ('" . $_POST['DOSTAWA'] . "','" . $_POST['PLATNOSC'] . "','" . $_POST['IMIE'] . "','" . $_POST['NAZWISKO'] . "','" . $_POST['ULICA'] . "','" . $_POST['NR_DOMU'] . "','" . $_POST['NR_MIESZKANIA'] . "','" . $_POST['WOJEWODZTWO'] . "','" . $_POST['MIEJSCOWOSC'] . "')";
                if ($conn->query($sql) === TRUE) {
                    echo "<h1>Pomyślnie Zfinalizowano Zakup</h1>";
                    $result = $conn -> query($sql3);
                    while($row = $result -> fetch_assoc()){
                        $sql2 = "UPDATE produkty SET Ilosc = Ilosc -".$row['ilosc']." WHERE ID = ".$row['Produkty_ID'];
                        $conn -> query($sql2);
                    }
                }
            }
        }else{
            $_SESSION['ERROR1'] = "Nie podano wszystkich danych !!!";
            unset($_SESSION['ERROR1']);
        }
        mysqli_close($conn);
        ?>
        <button type="submit" class="btn btn-lg btn_primary btn_block" style="width: 500px">ZAKUP</button>
    </form>
    </div>
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


