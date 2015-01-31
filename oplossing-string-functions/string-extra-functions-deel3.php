
	<?php

	$letter		=	'e';
	$cijfer		=	'3';
	$langwoord	=	'zandzeepsodemineralenwatersteenstralen';

	$vervang	=	str_replace( $letter , $cijfer, $langwoord );
	?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Opdracht string deel 3</h1>

<p>woord:<?=$langwoord ?></p>
<p>letter:<?=$letter?></p>
<p>vervangen:<?=$cijfer?></p>  
<p>resultaat:<?=$vervang ?></p>
</body>
</html>
	