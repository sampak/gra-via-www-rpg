function logowanie()
{
document.getElementById("info").innerHTML = "<center><h1>Zaloguj Sie</h1><form method='post' action='login.php'class='form'>  <input type='text' name='login' placeholder='login:' class='form-control' /> </br> <input type='password' name='password' placeholder='haslo:' class='form-control' /></br>  <input  type='submit' class='button' value='zaloguj sie' /></form><br />Nie posiadasz Konta? <a onclick='rejestracja()'> Zajestruj się</a></center>";
}
function rejestracja()
{
document.getElementById("info").innerHTML = "<center><h1>Zajestruj się</h1><form method='post' action='registerc.php'class='form'>  <input type='text' name='login' placeholder='login:' class='form-control' /> </br> <input type='password' name='password' placeholder='haslo:' class='form-control' /></br>  <input type='text' name='email' placeholder='E-Mail:' class='form-control' /> </br><input  type='submit' class='button' value='załóż konto' /></form><br />Posiadasz już konto<a onclick='logowanie()'> zaloguj się!</a></center>";
}

