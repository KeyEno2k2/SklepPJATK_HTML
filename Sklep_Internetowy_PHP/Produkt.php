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
<p></p>
<div class="row">
        <?php
        if (isset($_SESSION['Produkt'])){
            $nazwa = $_SESSION['Produkt'];
            $typ = $_SESSION ['Produkt_TYP'];
        } else if(isset($_POST['jajeczko'])){
            $nazwa = $_POST['jajeczko2'];
            $typ = $_POST['jajeczko'];
            $_SESSION['Produkt'] = $nazwa;
            $_SESSION['Produkt_TYP'] = $typ;
        }

        $conn = new mysqli("localhost", "root","xxx","projektrbd");
        $sql = "SELECT * FROM produkty WHERE Nazwa ='".$nazwa."' AND Typ_ID = ".$typ;
        $result = $conn -> query($sql);

        if ($result -> num_rows >0){
            $row = $result -> fetch_assoc();
            ?>
    <div class="col-8" style="margin-right: -300px">
        <?php
        echo "<image src=".'"'.$row['Zdjecie_URL'].'"'."style=".'"'."margin-left: 150px".'"'.">";
        ?>
    </div>
    <div class="col-md-auto bg-light shadow">
        <?php
        echo "<h1 style='width: 700px;'>" .$row['Nazwa']."</h1>";
        ?>
        <p></p>
        <?php
        echo "<h1 style='width: 700px;'>" .$row['Cena']." zł </h1>";

        ?>
        <p></p>
        <?php
        echo "<h1>Dostępnych sztuk:</h1>"."<h1 style='width: 700px'>".$row['Ilosc']."</h1>";
        ?>
        <form method="post" action="Koszyk.php"><input name="KOSZYK_ADD" type="hidden" value="<?php echo $row['ID']?>">
            <input name="STAN" type="hidden" value="<?php echo $row['Ilosc']?>">
        <h1>Wybierz ilość sztuk: </h1><input value="1" type="number" name="ilosc" placeholder="Ilość">

            <?php
            if($row['Ilosc'] <= 0){
                echo "<h2>Brak na Stanie!!!!!!!</h2>"
            ?>
        <button disabled class="btn btn-muted">Dodaj do Koszyka</button>
            <?php
            }else{
            ?>
            <button>Dodaj do Koszyka</button>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION['ERROR'])){
                echo $_SESSION['ERROR'];
                unset($_SESSION['ERROR']);
            }
            ?>
        </form>
    </div>
</div>
<div class="text-center">
<div class="col bg-light shadow">

    <h1>Opis Produktu</h1>
    <?php
    echo "<p>" .$row['Opis']. "</p>";
    }
    ?>

<h1>Dodaj Anonimową Opinię produktu</h1>
    <form action="DodawanieOpini.php" method="post">
    <textarea style="width: 1200px; height: 200px" name="OPINIA"></textarea>
        <button style="width: 800px">Prześlij</button>
        <input type="hidden" value=" <?php echo $row['ID']; ?>" name="id">
    </form>
    <p style="margin-bottom: 50px"></p>
    <h1>Opinie Produktu</h1>

    <?php
    $sql9 = "SELECT * FROM opinie WHERE Produkty_ID= ".$row['ID'];
    $result = $conn -> query($sql9);
    if ($result -> num_rows > 0){
        ?>
    <table style="border: 2px solid black; width: 100%">
    <?php
        while ($row = $result -> fetch_assoc()){
            echo "<tr><td>".$row['Opinia']."</td></tr>";
        }
    }
    ?>
    </table>
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

