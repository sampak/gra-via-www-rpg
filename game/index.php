<?php
session_start;
require_once("head.php");
require_once("../config/baza.php");
require_once("function.php");
require_once("../dane.php");
level();

echo'
<div id="container">
<div id="logo">
Gra via www
</div>
<div id="menu">
<div class="option"><a href="index.php">Strona Główna</a></div>
<div class="option"><a href="forum">Forum</a></div>
<div class="option"><a onclick="logout.php"">Wyloguj</a></div>
<div style="clear:both"></div>
</div>';
echo'
<div id="info">
<div id="login">
';
$wynik4 = mysql_query("SELECT * FROM users WHERE id='$_SESSION[user_id]'") 
//Wyświelt Komunikat o błędzie
or die("Błąd w zapytaniu1!");   
while($rek4 = mysql_fetch_array($wynik4)){
echo '<h4>Witaj '.$rek4['login'];
echo '<br />Twój level '.$rek4['level'];
echo '<br />Twój exp '.$rek4['exp'].'/'.$rek4['next_level'];


}
echo'</div>
<h1><center>Gra via www opis</center></h1>
<br />
Gra via www pisana for public
</div>
<div id="footer">
<div class="footbars">Created by <a href="logowanie.php">sampak</a></div>
<div style="clear:both"></div>
</div>
</div>';
?>

