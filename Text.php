<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="./button.css" media="all" />
	<!--[if IE]>
	<style type="text/css" media="all">.borderitem {border-style: solid;}</style>
	<![endif]-->
</head>

<body>

	<?php
	include ('Text.css');
	$naam="naam";
	$achternaam="achternaam";
	$kleur="rode";
	$fruit="appel";
	$result = $kleur . $fruit;
	
	var_dump( $naam );
	
	// Commentaar  dit is een variabele
	/* nog een commentaar */
		echo("<div class='k'></div>");
		echo ("Hierin typ ik eens voluit kort");
		echo ("<div class='j'></div>");
		
		// Void voor de echo laat hem niet weergeven
	?>
	<?php print("$naam"); ?>
	<?=$achternaam?>
	<?php
		echo("<div class='k'></div>");
	?>
	<h1>
		<?php
			if (print("$naam")) {
				echo ("weergegeven");
			}
		?>
	</h1>
	<?php
		echo("<div class='k'></div>");
	?>
	<?=$result?>
	<?=$kleur?>
	<?=$fruit?>

</body>
</html>
