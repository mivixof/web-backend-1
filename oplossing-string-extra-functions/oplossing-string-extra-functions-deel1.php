<?php

	$fruit="kokosnoot";
	
	$strlenght= strlen($fruit);
	
	$string="kokosnoot";
	$substring="o";
	$strpos= strpos($string, $substring);
	var_dump($strpos);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Opdracht string deel 1</h1>

<h2>soort fruit : <?=$fruit?></h2>
<h3><?=$strlenght?>tekens</h3>
<h3>positie<?=$strpos?></h3>

</body>
</html>
	