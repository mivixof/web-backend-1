<?php
	
	$startBedrag 		=	100000;
	$rentePercent		=	8;
	$jaarTal			=	10;
	
	$bereken = berekenbedrag( $startBedrag, $rentePercent, $jaarTal );
	function berekenbedrag( $startBedrag, $rentePercent, $jaarTal )
	{
		static 	$teller 		= 1;
		static 	$arrayDump 		= array();
	

		$winst 	=  $startBedrag  *($rentePercent/100);
		$volledig	=	$startBedrag + $winst;
		

			$arrayDump[ $teller ] = 'het bedrag in totaal is' 
			. round($volledig) . ' en de winst is ' . round($winst);

			if ( $teller < $jaarTal )
			{
				++$teller;
				$bereken = berekenbedrag( $volledig, $rentePercent, $jaarTal );
			}
		
		return $arrayDump;
	}
	var_dump($bereken);
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	</head>
	<body>
	
		<h1>Oplossing (klassikaal) recursive: deel1</h1>
			<?php foreach($bereken as $zin): ?>
				<li>
					<?php echo $zin ?>
				</li>
			<?php endforeach ?>
		</ul>
	</body>
</html>