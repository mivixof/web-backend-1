<?php
var_dump($_POST);
$gebruiker = "test";
$paswoord  = "test";

		$bericht[1] = "Welkom";
		$bericht[2] = "Foutieve login";


	if(isset($_POST['submit']))
	{
	if ( $_POST['gebruiker'] == $gebruiker && $_POST['paswoord'] == $paswoord )
	{
		echo $bericht[1];
	}	
	else
	{
		echo $bericht[2];
	}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	
</head>
<body>

<form action="post.php" method="POST">

<label for="gebruiker">
	<p>Gebruikersnaam</p>
	<input id="gebruiker" type="text" name="gebruiker"/>
</label>
<label for="paswoord">
	<p>Paswoord</p>
	<input id="paswoord" type="password" name="paswoord"/>
</label>
<br/>
	<input type="submit" value="login verzenden" name="submit"/>
</form>
		

</body>
</html>