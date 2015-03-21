

<?php
session_start();
ob_start();
//Potrzebne pliki
include("config/baza.php");
include("head.php");
//Zmienna login
$login = $_POST["login"];
//Kodowanie do Xyzzyrp
$haslo = md5(strtolower($_POST['login']) . "MRFX_01" . $_POST['password']);
 //Pobierz login z bazy danych
$zapytanie = mysql_query ("SELECT login FROM users WHERE login = '$login'");
$wynik_zapytania = mysql_fetch_array($zapytanie);
	//Login nie zgadza się lub nie ma go w bazie danych
	if($wynik_zapytania[0] != $login){
	header('location: index.php?login=error');
}else{
	//Pobierz hasło
	$zapytanie = mysql_query("SELECT pass FROM users WHERE login = '$login' "); //pobierz hasło z bazy danych
	$wynik_zapytania = mysql_fetch_array($zapytanie);
	//Hasło prawidłowe pobierz id z bazy danych przenieś do panelu
	if($haslo == $wynik_zapytania[0]){
	$zapytanie = mysql_query("SELECT id, login FROM users WHERE login = '$login'");    //pobierz id z bazy danych
	$wynik_zapytania = mysql_fetch_array($zapytanie);
	$_SESSION["zalogowany"] = 1;
	$_SESSION["user_id"] = $wynik_zapytania[0];
	$_SESSION["user_login"] = $wynik_zapytania[1];
//zalogowany przenieś do panelu
header("Location: game/index.php");
   
   
   
//Hasło nie prawidłowe
}else{
  header('location: index.php?login=error'); //przekierowanie na stronę błedu
   }
  
  
  
}
ob_end_flush();
?>
