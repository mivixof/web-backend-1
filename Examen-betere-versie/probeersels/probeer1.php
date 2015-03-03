<?php

	/*probeer1 is voor het bericht ingeving als het leeg of niet leeg is.*/

	$bericht="";
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['input']))
		{
			$bericht="Het is leeg.";
		}
		
		if(!empty($_POST['input']))
		{
			$bericht="Het is niet leeg.";
		}
	}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>probeer1</title>
</head>
<body>

<form action="probeer1.php" method="POST">
	<input type="text" name="input"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<p><?= $bericht ?></p>

</body>
</html>