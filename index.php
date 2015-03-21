<?php
include("head.php");
echo'
<div id="container">
<div id="logo">
Gra via www
</div>
<div id="menu">
<div class="option"><a href="index.php">Strona Główna</a></div>
<div class="option"><a href="forum">Forum</a></div>
<div class="option"><a onclick="logowanie()"">Zaloguj się</a></div>
<div style="clear:both"></div>
</div>';
if($_GET['register'] == "success"){
echo'<div class="success">Rejestracja zakończona sukcesem możesz się teraz zalogować</div>';

}
if($_GET['register'] == "empty"){
echo'<div class="warning">Wypełnij wszystkie pola!</div>';

}
if($_GET['login'] == "error"){
echo'<div class="warning">Podałes błędny login lub hasło</div>';

}

echo'
<div id="info">
<div id="login">
  <h2>Zaloguj Sie</h2>
  <form method="post" action="login.php"class="form">
  <input type="text"  name="login" placeholder="login:" class="form-control" />
  <input type="password" name="password" placeholder="haslo:" class="form-control" /></br>
  <input type="submit" class="button" value="zaloguj sie" />
    </form> 
	<button  class="button" onclick="rejestracja()">Rejestracja</button>
</div>
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
