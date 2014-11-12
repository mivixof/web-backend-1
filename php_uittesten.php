<!doctype html>
<html>
	
	<head>
	</head>


<body>
	<?php
		$voornaam = "Augustus";
		$achternaam	= "Octavius";
		$vollenaam = $voornaam . " " . $achternaam ;
		
		$naam = "Augustus";
		
		var_dump ("$naam");
		
		$naam = $naam . " " . "Octavius" ;
		
		var_dump ("$naam");
		
		/*var_dump ($GLOBALS);*/
		
		$feeling="i'm fine";
		
		$strLenght= strlen($feeling);
		
		$string="vier";
		$substring="v";
		
		$strPos= strpos( $string, $substring );
		var_dump ($strPos);
	?>
	
	<h1>Dit is de website van <?=$vollenaam?></h1>
	
	<p>Hallo, mijn naam is <?=$naam?></p>
	<p><?=$strLenght?></p>
	<p><?=$string?></p>
	<p><?=$strPos?></p>
	
</body>

</html>