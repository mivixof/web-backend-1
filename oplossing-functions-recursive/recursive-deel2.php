<?php
function berekenKapitaal( $dataArray )
{
if ( $dataArray[ 'teller' ] <= $dataArray[ 'looptijd' ] )
{
$renteBedrag	=	floor( $dataArray['kapitaal'] * ( $dataArray['renteProcent'] / 100 ) );
$dataArray['kapitaal'] +=	$renteBedrag;
$dataArray['historiek'][ $dataArray[ 'teller' ] ] =	'Het bedrag bedraagt ' . $dataArray['kapitaal'] . ' en de winst is '. $renteBedrag ;
++$dataArray[ 'teller' ];
return berekenKapitaal( $dataArray );
}
else
{
return $dataArray;
}
}
$startBedrag =	100000;
$rentePercent	=	8;
$jaarTal	=	10;
$winst = berekenKapitaal( array( 'kapitaal' => $startBedrag,
'renteProcent' => $rentePercent,
'looptijd' => $jaarTal,
'teller'	=> 1,
'historiek'	=>	array() ) );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Oplossing (klassikaal) recursive: deel2</h1>
<ul>
<?php foreach( $winst['historiek'] as $value): ?>
<li><?php echo $value ?></li>
<?php endforeach ?>
</ul>
</body>
</html>