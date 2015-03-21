<?php
session_start();
ob_start();
include("config/baza.php");
include("head.php");

$login = $_POST["login"];
$haslo = md5(strtolower($_POST['nick']) . "MRFX_01" . $_POST['password1']);
 
$zapytanie = mysql_query ("SELECT login FROM users WHERE login = '$login'");
$wynik_zapytania = mysql_fetch_array($zapytanie);

if($wynik_zapytania[0] != $login){
  echo "<center><h2>Podane konto nie istnieje</center></h2></br>";
  }else{
  
  $zapytanie = mysql_query("SELECT pass FROM users WHERE login = '$login' ");
  $wynik_zapytania = mysql_fetch_array($zapytanie);
  
  
  
  
  
  
  
  if($haslo == $wynik_zapytania[0]){
   $zapytanie = mysql_query("SELECT id, login FROM users WHERE login = '$login'");
   $wynik_zapytania = mysql_fetch_array($zapytanie);
   $_SESSION["zalogowany"] = 1;
   $_SESSION["user_id"] = $wynik_zapytania[0];
   $_SESSION["user_login"] = $wynik_zapytania[1];
   
   header("Location: /panel/index.php");
   
   
   
   
   }else{
   }
  
  
  
}
ob_end_flush();
?>