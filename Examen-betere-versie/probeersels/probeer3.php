<?php

	/*probeer3 oefening voor het aanmaken van een delete knop bij elke input
	zodat ook elke input apart verwijderd wordt.*/
	
	session_start();
	$bericht="";
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['input']))
		{
			$bericht="Het is leeg.";
		}
		
		if(!empty($_POST['input']))
		{
			$_SESSION['form'][] = $_POST['input'];
		}
	}

	if (isset($_POST['knop1']))
		{
			unset($_SESSION['form'][$_POST['knop1']]);
		}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>probeer3</title>
</head>
<body>

<form action="probeer3.php" method="POST">
	<input type="text" name="input"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<p><?= $bericht ?></p>

<?php foreach ($_SESSION['form'] as $key => $value) : ?>
<ul>
	<li>
	<form method="POST" action="probeer3.php">
		</label><?= $value ?></label>
		<button value="<?=$key ?>" name="knop1"></button>
	</form>
</ul>
<?php endforeach ?>

</body>
</html>