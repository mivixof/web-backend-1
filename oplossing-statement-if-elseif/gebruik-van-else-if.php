<?php
$getal	=	18;
$ondergrens	=	0;
$bovengrens	=	0;
$antwoord	=	"";
if ( $getal >=0 && $getal < 10 )
{
$ondergrens	=	0;
$bovengrens	=	10;
}
elseif ( $getal >=10 && $getal < 20 )
{
$ondergrens	=	10;
$bovengrens	=	20;
}
else
{
$ondergrens	=	false;
$bovengrens	=	false;
}
if ( $ondergrens !== false )
{
$antwoord =	'Het getal' . $getal . 'ligt tussen ' . $ondergrens . ' en ' . $bovengrens . '.';
}
else
{
$antwoord =	'Het getal ' . $getal . 'is niet geldig.';
}
$antwoordReverse =	strrev( $antwoord );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Elseif statements</title>
</head>
<body>
<h1>Oplossing voor if: elseif</h1>
<p><?= $antwoordReverse ?></p>
</body>
