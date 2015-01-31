<?php

$artikels = array(
array (	'titel' => 'Kasteelmoord: KI Gent beslist op 16 december 
							 over bijkomend onderzoek',
		'datum' => '3 december 2014',
		'inhoud' => 'In de zaak van de kasteelmoord 
								beslist de Gentse kamer van inbeschuldigingstelling (KI) 
								op 16 december over de gevraagde bijkomende onderzoeksdaden. 
								Dat meldt het Gentse parket-generaal woensdag.

								Het parket vraagt in het dossier van de kasteelmoord 
								de verwijzing van André Gyselbrecht, 
								Peter Gyselbrecht en Pierre Serry. Vier advocaten hadden 
								een verzoekschrift ingediend met het oog op aanvullende 
								onderzoeksdaden, maar volgens de onderzoeksrechter werden 
								die laattijdig ingediend. De Gentse kamer van inbeschuldigingstelling 
								behandelde dinsdag de vraag opnieuw, maar heeft nog geen beslissing genomen. 
								Op 16 december wordt een uitspraak verwacht.',
		'afbeelding' => 'beeld1.jpg',
		'afbeeldingBeschrijving' => 'Kasteelmoord bij rechtzaak',
		'inhoudVerkort' => 'Het parket vraagt in het dossier van de kasteelmoord 
								de verwijzing van',
),
array (	'titel' => 'Journalist buiten vervolging voor 
							 schending onderzoeksgeheim in zaak-Lagrou',
					 'datum' => '3 december 2014',
					 'inhoud' => 'De Gentse kamer van 
								inbeschuldigingstelling (KI) heeft dinsdag 
								een journalist van Het Laatste Nieuws buiten 
								vervolging gesteld voor schending van het onderzoeksgeheim 
								in de zaak van cannabisboer Patrick Lagrou. De KI oordeelde 
								dat het onduidelijk blijft wie informatie uit het dossier zou 
								gelekt hebben en dat er onvoldoende bezwaren zijn om de journalist
								te vervolgen.

								Volgens Het Laatste Nieuws had Lagrou in december 2011 
								"een handig in elkaar geknutselde klacht" 
								ingediend wegens schending van het onderzoeksgeheim,
								nadat de krant een artikel had geschreven over zijn 
								investeringen in Thailand. De raadkamer in Brugge stelde 
								de journalist buiten vervolging, maar er werd beroep aangetekend. 
								De Gentse kamer van inbeschuldigingstelling bevestigde dinsdag de 
								eerste beslissing.

								Lagrou werd begin november opgepakt in Thailand. 
								Zijn proces voor de correctionele rechtbank van Ieper, 
								over de grote cannabisplantage die in 2009 op zijn boerderij
								ontdekt werd, wordt op 22 december behandeld.',
					 'afbeelding' => 'beeld2.jpg',
					 'afbeeldingBeschrijving' => 'Schending onderzoeksgeheim',
					 'inhoudVerkort' => 'inbeschuldigingstelling (KI) heeft dinsdag 
								een journalist van Het Laatste Nieuws',
),
array (	'titel' => '‘Treingebruikers, vraag compensatie voor stakingen’',
					 'datum' => '3 december 2014',
					 'inhoud' => 'De organisaties Test-Aankoop, 
								TreinTramBus en Navetteurs.be hebben woensdag een campagne opgestart 
								om reizigers ertoe aan te zetten compensatie aan te vragen voor de schade 
								die ze lijden door onder meer de provinciale actiedagen. 
								Ze vragen ook dat de aanvraagprocedure voor die compensaties 
								vereenvoudigd wordt. Dat melden de drie organisaties woensdag 
								in een persbericht.

								De bewustmakingscampagne werd woensdagochtend 
								opgestart met een flyeractie aan de stations van 
								Gent-Sint-Pieters, Brugge, Namen en Luik-Guillemins. 
								Op 9, 12, en 16 december volgen gelijkaardige acties
								in andere grote stations.

								"De treinreizigers in België worden dezer dagen dubbel 
								getroffen: door veelvuldige stakingen en binnenkort 
								ook door bijkomende besparingen bij het spoor", 
								klinkt het in het persbericht. De organisaties 
								benadrukken dat de reizigers niet machteloos staan. 
								"Bij vertragingen en afgeschafte treinen heeft de reiziger
								immers recht op een compensatie, ook al roept de NMBS het excuus van
								‘overmacht’ in om deze voor stakingsdagen niet te moeten uitbetalen."

								Test-Aankoop, TreinTramBus en Navetteurs.be vragen de 
								NMBS en minister van Mobiliteit Jacqueline Galant om de procedure 
								om compensatie aan te vragen te vereenvoudigen, iets waar de ombudsdienst
								treinreizigers eerder ook al voor pleitte. 
								Ze willen ook dat de compensaties in geld worden uitbetaald.',
					 'afbeelding' => 'beeld3.jpg',
					 'afbeeldingBeschrijving' => 'Vergoeding door treinstakingen',
					 'inhoudVerkort' => 'De bewustmakingscampagne werd woensdagochtend 
								opgestart met een flyeractie',
),
);
	

			$individueelArtikel	=	false;
			$artikelsContainer	=	array();
				foreach( $artikels as $id => $artikel )
				{
					$artikelsContainer[ $id ] =	$artikel;
					$artikelsContainer[ $id ][ 'inhoudVerkort' ] =	substr( $artikel[ 'inhoud' ], 0, 50 );
				}
				if ( isset( $_GET['id'] ) )
				{
					$id =	$_GET['id'];
					$individueelArtikel	=	true;
					$artikelsContainer	=	$artikelsContainer[ $id ];
				}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	
	<style>
body
{
	font-family:"Segoe UI";
	color:#423f37;
}
.container
{
	width: 1024px;
	margin: 0 auto;
}
img
{
	max-width: 100%;
}
.multiple
{
	float:left;
	width:288px;
	margin:16px;
	padding:16px;
	box-sizing:border-box;
	background-color:#EEEEEE;
}
.multiple p:after
{
	content:"...";
}
.multiple:nth-child(3n+1)
{
	margin-left:0px;
}
.multiple:nth-child(3n)
{
	margin-right:0px;
}
.single img
{
	float:right;
	margin-left: 16px;
}
</style>
	
</head>

<body>
		<h1>Oplossing ( klassikaal) get: deel1</h1>
			<div class="container">
				<?php if ($individueelArtikel == false): ?>
				<?php foreach ($artikelsContainer as $id => $artikel): ?>
					<article class="multiple">
						<h1><?= $artikel['titel'] ?> | <?= $artikel['datum'] ?></h1>
							<p><?= $artikel['inhoudVerkort'] ?></p>
								<img src="img/<?= $artikel[ 'afbeelding' ] ?>" alt="<?= $artikel[ 'afbeeldingBeschrijving' ] ?>">
								<a href="<?= $_SERVER[ 'PHP_SELF' ] ?>?id=<?= $id ?>">Lees meer</a>
					</article>
				<?php endforeach ?>
				<?php else: ?>
							<p>individueel artikel</p>
								<article>
								<h1><?= $artikelsContainer['titel'] ?> | <?= $artikel['datum'] ?></h1>
								<img src="img/<?= $artikelsContainer[ 'afbeelding' ] ?>" alt="<?= $artikelsContainer[ 'afbeeldingBeschrijving' ] ?>">
									<p><?= $artikelsContainer['inhoud'] ?></p>
										
								</article>
				<?php endif ?>
			</div>

</body>
</html>