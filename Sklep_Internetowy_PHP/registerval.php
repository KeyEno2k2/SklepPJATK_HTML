<?php
session_start();
function password_validation($pass,$pass2)
{

    if($pass=$pass2) {
        $number = preg_match('@[0-9]@', $pass);
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);


        if (strlen($pass) < 8 || !$number || !$uppercase || !$lowercase) {
            return false;
        } else {
            return true;
        }
    }

}
function check_if_exist($login,$email)
{
    $conn = new mysqli('localhost', 'root', 'xxx', 'projektrbd');
    if ($conn->connect_error) {
        die("Nieudane połączenie " . $conn->connect_error);
    }

    $sql = "SELECT Imie,Email,Haslo FROM klient";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            if ($login==$row['login'])
            {
                mysqli_close($conn);
                return "Dany użytkownik z tym loginem już istnieje";
            }else if($email==$row['email'])
            {
                mysqli_close($conn);
                return "Dany użytkownik z tym email'em już istnieje";

            }
        }

    }else
        mysqli_close($conn);
    return true;
}
if(isset($_POST['Imie']) && isset($_POST['Email']) && isset($_POST['Haslo']) && isset($_POST['Haslo2']))
{if(password_validation($_POST['Haslo'],$_POST['Haslo2']))
{
    $conn = new mysqli('localhost', 'root', 'xxx', 'projektrbd');
    if ($conn->connect_error) {
        die("Nieudane połączenie " . $conn->connect_error);
    }
    $sql="INSERT INTO klient(Imie,Haslo,Email)VALUES ('".$_POST['Imie']."','".$_POST['Haslo']."','".$_POST['Email']."')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['info']="Zarejestrowano pomyślnie, zaloguj się";
        mysqli_close($conn);
        header("location:MojeKonto.php");
    } else {
        $_SESSION['error']="Error".$sql . "<br>".$conn->error;
        mysqli_close($conn);
        header("location:MojeKonto.php");
    }
}else {
    $_SESSION['error'] = "Twoje Hasło jest za słabe (8 liter ,przynajmniej jedna duża litera i jedna cyfra";
    header("location:MojeKonto.php");
}
}else {
    $_SESSION['error'] = "Nie podano wszystkich danych";
    header("location:MojeKonto.php");
}