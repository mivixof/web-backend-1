<?php
$getal = 100;
$teller = 0;
$container = array();
while( $teller <= $getal )
{
$container[] = $teller;
++$teller;
}
$getallenString = join( $container, ', ' );
$product = array_product( $container );
/* var_dump( $container ); */
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>while</title>
</head>
<body>
<p><?= $getallenString ?></p>
<p>En het product is <?= $product ?></p>
</body>
</html>
