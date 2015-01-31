<?php
$getal1 = 5;
$getal2 = 8;
$string = "Oplossing.";
function som( $getal1, $getal2 )
{
$som = $getal1 + $getal2;
return $som;
}
function multi( $getal1, $getal2 )
{
$product = $getal1 * $getal2;
return $product;
}
function gelijk( $getal )
{
$isEven = false;
if( $getal % 2 == 0 )
{
$isEven = true;
}
return $isEven;
}
function calculateLengthAndUppercase( $string )
{
$container = array();
$length = strlen( $string );
$uppercase = strtoupper( $string );
$container[ 'length' ] = $length;
$container[ 'uppercase' ] = $uppercase;
return $container;
}
$som = som( $getal1, $getal2 );
$product = multi( $getal1, $getal2 );
$isEven = gelijk( $getal1 );
$stringGegevens = calculateLengthAndUppercase( $string );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Functions</title>
</head>
<body>
<h1>Functions</h1>
<p>De som van <?= $getal1 ?> en <?= $getal2 ?> is: <?= $som ?></p>
<p>Het product van <?= $getal1 ?> en <?= $getal2 ?> is: <?= $product ?></p>
<p>Het getal <?= $getal1 ?> is <?= ( $isEven ) ? "true" : "false" ?></p>
<p>Stringlengte "<?= $string ?>" bedraagt <?= $stringGegevens[ 'length' ] ?> karakters. Uppercase : <?= $stringGegevens[ 'uppercase' ] ?></p>
</body>
</html>