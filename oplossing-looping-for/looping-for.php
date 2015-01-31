<?php
$getal = 100;
$container = array();
for( $teller = 0; $teller <= $getal; ++$teller )
{
$container[] = $teller;
}
$getallenString = join( $container, ', ' );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FOR</title>
</head>
<body>
<h1>oplossing voor FOR</h1>
<p><?= $getallenString ?></p>
</body>
</html>