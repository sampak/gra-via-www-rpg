<?php
include("config/baza.php");
include("head.php");

$login = $_POST["login"];
//Kodowanie do xyzzyrp
$haslo = md5(strtolower($_POST['login']) . "MRFX_01" . $_POST['password']);
$haslo2 = $_POST["password"];
$email = $_POST["email"];

//System sprawdzania czy wszystkie pola s� wype�nione
 if(empty($_POST['login']) && empty($_POST['password']) && empty($_POST['email'])){

header('location: index.php?register=empty'); //przekierowanie na stron� b�edu

}else{


$zapytanie = mysql_query("INSERT INTO users(id, login, pass, email) values ('','$login','$haslo','$email')"); //wy�lij do bazy danych nowe konto
header("Location: index.php?register=success");
}
?>