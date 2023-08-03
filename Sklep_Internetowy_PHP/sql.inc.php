<?php
function connect(){
    $dbUserName="root";
    $dbPassword="";
    $mysqli= new PDO ("mysql:host=localhost;dbname=PROJEKT", $dbUserName, $dbPassword);
    return $mysqli;
}