<?php
	
	/*probeer2 het aanmaken van foreach loop waarbij elke alle ingegeven informatie
	automatisch een key gegenereerd krijgt*/

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

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>probeer2</title>
</head>
<body>

<form action="probeer2.php" method="POST">
	<input type="text" name="input"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<p><?= $bericht ?></p>

<?php foreach ($_SESSION['form'] as $key => $value) : ?>
<ul>
	<li>
	<label><?= $key ?></label>
	<input type="text" value="<?=$value?>" name="<?= $key ?>"/>
	</li>
</ul>
<?php endforeach ?>

</body>
</html>