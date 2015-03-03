<?php
	
	/*probeer4 het overschakelen van een foreach loop naar een ander foreach met behulp
	van een knop.*/
	
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
	
	if(isset($_POST['knop2']))
		{
			$_SESSION['form2'][] = $_SESSION['form'][$_POST['knop2']];
			unset($_SESSION['form'] [$_POST['knop2']]);
		}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>probeer4</title>
</head>
<body>

<form action="probeer4.php" method="POST">
	<input type="text" name="input"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<p><?= $bericht ?></p>

<h2>1ste loop</h2>
<?php foreach ($_SESSION['form'] as $key => $value) : ?>
<ul>
	<li>
	<form method="POST" action="probeer4.php">
		</label><?= $value ?></label>
		<button value="<?=$key ?>" name="knop1"></button>
		<button value="<?=$key ?>" name="knop2"></button>
	</form>
	</li>
</ul>
<?php endforeach ?>

<h2>2de loop</h2>
<?php foreach ($_SESSION['form2'] as $key => $value) : ?>
<ul>
	<li>
	<form method="POST" action="probeer4.php">
		</label><?= $value ?></label>
	</form>
	</li>
</ul>
<?php endforeach ?>

</body>
</html>