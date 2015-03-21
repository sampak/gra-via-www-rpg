<?php
session_start;
require_once("../config/baza.php");
require_once("function.php");
require_once("../dane.php");
//Kod na dodawanie levela jeżeli gracz osiągnie dany poziom expa skrypt posiada pare wad
function level(){
$wynik4 = mysql_query("SELECT * FROM users WHERE id='$_SESSION[user_id]'") 
//Wyświelt Komunikat o błędzie
or die("Błąd w zapytaniu1!");   
while($rek4 = mysql_fetch_array($wynik4)){
$level = $rek4['level'];
$exp = $rek4['exp'];
$next_level = $rek4['next_level'];
$newlevel = $level+1;
$nextexp = $exp+40;
//Gracz posiada maksymalny level nie zwiększaj levelu jeżeli chcesz żeby nie było limitu na level zakomentuj 18 i 19 linijke
if($level == 60){
}
//Jeżeli gracz ma okresloną liczbe expa wtedy zwiększ level oraz zmien nextexp
if($exp == $next_level){
$wynik = mysql_query("UPDATE users SET level='$newlevel' WHERE login='$_SESSION[user_login]'");
$wynik2 = mysql_query("UPDATE users SET next_level='$nextexp' WHERE login='$_SESSION[user_login]'");
echo $_SESSION['user_id'];
}
}
}
?>