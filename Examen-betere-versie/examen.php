<?php
	define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
	session_start();
	
	$message='';
	
	/*Als er op de knop begin is geklikt gaat hij het volgende doen :*/
	if(isset($_POST['begin']))
	{
		/*Als het niet leeg is*/
			if(!empty($_POST['voegToe']))
			{
				$_SESSION['tedoen'][] = $_POST['voegToe'];
			}
		/*Als het wel leeg is*/
			elseif(empty($_POST['voegToe']))
			{
				$message='Fout, vul gelieve iets in.';
			}
	}

	/*Als er op de knop toggleDoen is geklikt gaat hij over naar Gedaan*/
		if (isset($_POST['toggleDoen']))
		{
			$_SESSION['gedaan'][] = $_SESSION['tedoen'][$_POST['toggleDoen']];
			unset($_SESSION['tedoen'] [$_POST['toggleDoen']]);
		}
	
	/*Als er op de knop toggleGedaan is geklikt gaat hij over naar Doen*/
		if (isset($_POST['toggleGedaan']))
		{
			$_SESSION['tedoen'][] = $_SESSION['gedaan'][$_POST['toggleGedaan']];
			unset($_SESSION['gedaan'] [$_POST['toggleGedaan']]);
		}
	
	/*Als er op de knop deleteDoen is geklikt is hij unsetted*/
		if (isset($_POST['deleteDoen']))
		{
			unset($_SESSION['tedoen'] [$_POST['deleteDoen']]);
		}
	
	/*Als er op de knop deleteGedaan is geklikt is hij unsetted*/
		if (isset($_POST['deleteGedaan']))
		{
			unset($_SESSION['gedaan'] [$_POST['deleteGedaan']]);
		}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Examen-Todo</title>
</head>
<body>
	<div class="container">
	<p><?= $message ?></p>

	<h1>Todo app</h1>
	<!-- als de sessions leeg zijn geven ze een bericht weer -->
	<?php if ((empty($_SESSION['tedoen'])) && (empty($_SESSION['gedaan']))):?>
		<p>Je hebt nog geen plannen, vul iets in.</p>
	<?php endif ?>
	
	<!-- als de sessions niet leeg zijn geven ze een bericht weer voor onderscheiding -->
	<?php if ((!empty($_SESSION['tedoen']))||(!empty($_SESSION['gedaan']))): ?>
	<h2>Te doen</h2>
	<ul>
		<!--Uit te voeren code ,  elke session die gebruik maakt van een key en een waarde-->
		<?php foreach ( $_SESSION['tedoen'] as $key => $voegToe): ?>
		<li>
			<form method="POST" action="<?=BASE_URL?>">
			<button class="button1" value="<?= $key ?>" name="toggleDoen"></button>
			<?= $voegToe ?>
			<button class="button2" value="<?= $key ?>" name="deleteDoen"></button>
			</form>
		</li>
		<?php endforeach ?>
	</ul>
	<!-- 2de bericht -->
	<h2>Gedaan</h2>
	<ul>
		<?php foreach ( $_SESSION['gedaan'] as $key => $voegToe): ?>
		<li>
			<form method="POST" action="<?=BASE_URL?>">
			<button class="button1" value="<?= $key ?>" name="toggleGedaan"></button>
			<?= $voegToe ?>
			<button class="button2" value="<?= $key ?>" name="deleteGedaan"></button>
			</form>
		</li>
		<?php endforeach ?>
	</ul>
	<?php endif ?>
	
	<!-- Begin Formulier -->
	<h1>Todo toevoegen</h1>
		<form action="<?=BASE_URL?>" method="POST">
			<input type="text" name="voegToe"/>
			<input type="submit" name="begin" value="Voeg toe"/>
		</form>
</div>
</body>
</html>