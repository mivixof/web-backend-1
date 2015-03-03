<?php
	
	/*probeer5 het overschakelen van een foreach loop naar een ander foreach met behulp
	van een knop dat ook terug kan naar de vorige loop. dus een TOGGLE*/
	
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
		
	if (isset($_POST['knop3']))
		{
			unset($_SESSION['form2'][$_POST['knop3']]);
		}
	
	if(isset($_POST['knop2']))
		{
			$_SESSION['form2'][] = $_SESSION['form'][$_POST['knop2']];
			unset($_SESSION['form'] [$_POST['knop2']]);
		}
		
	if(isset($_POST['knop4']))
		{
			$_SESSION['form'][] = $_SESSION['form2'][$_POST['knop4']];
			unset($_SESSION['form2'] [$_POST['knop4']]);
		}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>probeer5</title>
</head>
<body>

<form action="probeer5.php" method="POST">
	<input type="text" name="input"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<p><?= $bericht ?></p>

<h2>1ste loop</h2>
<?php foreach ($_SESSION['form'] as $key => $value) : ?>
<ul>
	<li>
	<form method="POST" action="probeer5.php">
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
	<form method="POST" action="probeer5.php">
		</label><?= $value ?></label>
		<button value="<?=$key ?>" name="knop3"></button>
		<button value="<?=$key ?>" name="knop4"></button>
	</form>
	</li>
</ul>
<?php endforeach ?>

</body>
</html>