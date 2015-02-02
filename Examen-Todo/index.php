<?php
include 'php/code.php';
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
	<div>
		<h2><?=$message?></h2>
	</div>
<?php endif ?>

<h1>Todo app</h1>
<!--Als de sessions submit en/of submitted geset zijn, dan gaat het volgende gebeuren
	de || zorgt dat de boolean als true wordt beschouwd bij de gegeven key (value)-->
<?php if ((isset($sessions['submit'])) || (isset($sessions['submitted'])) ):?>
<h2><?=$mess1?></h2>
<!--als session submit geset is-->
<?php if (isset($sessions['submit'])): ?>
	<!--voor elke session submit as key to value -->
	<?php foreach ($sessions['submit'] as $button => $value) : ?>
	<form action="<?=BASE_URL?>" method="POST">
		<button class="button1" name="toggle" value="<?=$button?>"></button>
		<?=$value?>
		<button class="button2" name="delete" value="<?=$button?>"></button>
		<!--komt er dus een button voor session toggle en delete en de waarde die is submitted/submit-->
	</form>
	<?php endforeach?>
	<!--einde voor de foreach loop en else (anders) 
	dat in de code staat zal hij dit bericht tonen als het dus niet geset is -->
	<?php else: ?>
	<h2><?=$mess2?></h2>
	<?php endif; ?>
	<!--einde van deze blok -->
	
	
	<h2><?=$mess3?></h2>
	<!--als session submitted geset is, door middel van de toggle knop dn zal hij dus naar deze
		blok veld gaan met als zelfde de 2 knoppen als ervoor en de gegeven input waarde -->
	<?php if (isset($sessions['submitted'])): ?>
		<?php foreach ($sessions['submitted'] as $button => $value):?>
		<form action="<?=BASE_URL?>" method="POST">
			<button class="button1" name="toggle" value="<?=$button?>"></button>
			<?=$value?>
			<button class="button2" name="delete" value="<?=$button?>"></button>
		</form>
		<?php endforeach?>
		<?php else: ?>
		<!--anders zo niet geset dus bvb nog niet getoggled zal deze tekst altijd weergegeven worden -->
		<p>Werk aan de winkel...</p>
	<?php endif; ?>
	<?php else: ?>
	<!--deze tekst is altijd zichtbaar zolang er geen enkele input veld is zowel
	bij submit als de submitted-->
	<p> Je hebt nog geen TODO's toegevoegd. Wil je werk krijgen? Voeg dan wat in! </p>
<?php endif; ?>

<h1>Todo toevoegen</h1>
<!--Dit is de begin form waar je het veld kan invullen zodat deze input wordt doorgestuurd via de 
code en weergegeven wordt bij de toggle functie enz...-->
<form action="<?=BASE_URL?>" method="POST">
	<input type="text" name="voegToe"/>
	<input type="submit" name="submit" value="Todo toevoegen"/>
</form>

</div>
</body>
</html>