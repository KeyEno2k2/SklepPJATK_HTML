<?php
session_start();
$conn=new mysqli('localhost','root','#JebacKurwy1969','projektrbd');
if($conn->connect_error)
{
    die("Nieudane połączenie ". $conn->connect_error);
}

$sql="SELECT ID,Imie,Email,Haslo FROM klient";
$pass=$_POST['Haslo'];
$login=$_POST['Email'];
$result =$conn->query($sql);
if($result->num_rows>0)
{while($row=$result->fetch_assoc())
{
    if($row['Email']==$login && $row['Haslo']==$pass)
    {   $_SESSION['Email']=$login;
        $_SESSION['Email']=$row['Email'];
        $_SESSION['Haslo']=$pass;
        $_SESSION['session']=true;
        $_SESSION['ID']=$row['ID'];
        break;
    }
}

    if(empty($_SESSION['login']))
    {
        $_SESSION['error'] = "Nieprawidłowy Login";
        mysqli_close($conn);
        header("location:MojeKonto.php");
    }else
    {
        $_SESSION['error'] = "Nieprawidłowe Hasło";
        mysqli_close($conn);
        header("location:MojeKonto.php");
    }

    if($_SESSION['Email'] === "admin@gmail.com" && $_SESSION['Haslo'] === "Admin123"){
        header("Location:PAModyfikacja.php");
    }


}

?>
