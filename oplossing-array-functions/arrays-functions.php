<?php
$dieren	=	array( "kat", "hond", "paard", "zebra", "leeuw", "kikker" );
$aantalDieren	=	count( $dieren );
$teZoekenDier	=	"zebra";
$dierGevonden	=	array_search( $teZoekenDier, $dieren );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>arrays</title>
</head>
<body>
<h1>arrays</h1>
<pre>
<?php var_dump( $dieren ) ?>
</pre>
<p>Aantal dieren: <?= $aantalDieren ?></p>
<?php if ( $dierGevonden ): ?>
<p>Het dier "<?= $teZoekenDier ?>" komt voor in de array $dieren</p>
<?php else: ?>
<p>Helaas, het dier "<?= $teZoekenDier ?>" komt niet in de array $dieren voor</p>
<?php endif ?>
</body>
</html>