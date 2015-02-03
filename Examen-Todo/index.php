<?php
include_once 'php/code.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Examen-backend1</title>
</head>
<body>
<div class="nav"></div>
<div class="container">
<!--als de message variable een tekst bevat of geset is, toont hij deze weer
dit komt als het veld leeg was-->
<?php if (isset($message)):?>
	<h2><?=$message?></h2>
<?php endif ?>

<h1>Todo app</h1>
<!--Als deze inputs leeg zijn dan komt het bericht tevoorschijn.-->
<?php if ((empty($sessions['submit']))&&(empty($sessions['submitted']))): ?>
<p><?=$bmessage?></p>
<?php endif ?>


<!--Als de sessions submit en/of submitted geset zijn, dan gaat het volgende gebeuren
	de || zorgt dat de boolean als true wordt beschouwd bij de gegeven key (value)-->
<?php if ((isset($sessions['submit'])) || (isset($sessions['submitted'])) ):?>
<!--als session submit geset is-->
	<h2><?=$mess1?></h2>
	<?php if (isset($sessions['submit'])): ?>
		<?php if ((empty($sessions['submit']))&& (isset($sessions['submitted']))): ?>
			<p><?=$gmessage?></p>
		<?php endif ?>
		<!--voor elke session submit as key to value -->
		<?php foreach ($sessions['submit'] as $button => $value) : ?>
			<form action="<?=BASE_URL?>" method="POST">
				<button class="button1" name="toggle" value="<?=$button?>"></button>
				<?=$value?>
				<button class="button2" name="delete" value="<?=$button?>"></button>
				<!--komt er dus een button voor session toggle en delete en de waarde die is submitted/submit-->
			</form>
		<?php endforeach?>
	<?php endif; ?>
	<!--einde van deze blok -->
	
	<!--als session submitted geset is, door middel van de toggle knop dan zal hij dus naar deze
		blok veld gaan met als zelfde de 2 knoppen als ervoor en de gegeven input waarde -->
	<h2><?=$mess2?></h2>
	<?php if (isset($sessions['submitted'])): ?>
		<?php foreach ($sessions['submitted'] as $button => $value):?>
			<form action="<?=BASE_URL?>" method="POST">
				<button class="button1" name="toggle" value="<?=$button?>"></button>
				<?=$value?>
				<button class="button2" name="delete" value="<?=$button?>"></button>
			</form>
		<?php endforeach?>
	<?php endif; ?>
	
<?php endif; ?>

<h1>Todo toevoegen</h1>
<!--Dit is de begin form waar je het veld kan invullen zodat deze input wordt doorgestuurd via de 
code en weergegeven wordt bij de toggle functie enz...-->
<form action="<?=BASE_URL?>" method="POST">
	<input type="text" name="voegToe"/>
	<input type="submit" name="submit" value="Voeg toe"/>
</form>

</div>
</body>
</html>
