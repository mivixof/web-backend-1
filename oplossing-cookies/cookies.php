<?php
$logindata = file_get_contents("text.txt");
$loginar = explode(",", $logindata);

$username = isset($_POST ["username"]);
if ($username)
{
$name = $_POST ["username"];
}
$password = isset($_POST ["password"]);
$submit = isset($_POST ["submit"]);
$remember = isset($_POST ["remember"]);
$forget = isset($_GET ["forget"]);
$cookieSAFE = isset($_COOKIE ["login"]);
if ($cookieSAFE)
{
$name = $_COOKIE ["login"];
}
$message = "" ;
$loginuser = array_search($username , $loginar);
$loginpass = array_search($password , $loginar);
if ($loginuser !==false && $loginpass !==false )
{
setcookie("login", $name , time() + 360);
$message = "welcome " . $name;
header('location: cookies.php');
if ($remember)
{
setcookie("login", $name , time() + 2592000);
header('location: cookies.php');
}
}
else
{
$message = "voeg een juist user en pass in" ;
}
if ($forget)
{
setcookie("login", $name , time() - 2592000);
header('location: cookies.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Opdracht cookies</title>
</head>
<body>
<section>
<h1>Inloggen</h1>
<?php if (!$cookieSAFE): ?>
<h2>
<?=$message;?>
</h2>
<?php endif ?>
<?php if ($cookieSAFE == true): ?>
<p><?= $name?>, you are now logged in.</p>
<p><a href="cookies.php?forget=true">Log out</a></p>
<?php else: ?>
<form action="cookies.php" method="post">
<ul>
<li>
<label for="username">username</label>
<input type="text" id="username" name="username">
</li>
<li>
<label for="password">password</label>
<input type="text" id="password" name="password">
</li>
<li>
<input type="checkbox" id="remember" name="remember">
<label for="remember">Mij onthouden</label>
</li>
</ul>
<input type="submit" name="submit">
</form>
<?php endif ?>
</section>
</body>
</html>
