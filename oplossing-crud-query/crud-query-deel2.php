<?php

		define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
		
		$db= new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

		$brouwersQueryString = 'SELECT brouwernr, brnaam 
								FROM brouwers';
								
								
				$brouwersStatement = $db->prepare($brouwersQueryString);
				
				$brouwersStatement->execute();
				
				$brouwers = array();
				
				while($row = $brouwersStatement->fetch(PDO::FETCH_ASSOC))
				{
					$brouwers[] = $row;
				}
				
				/*$brouwerId = $brouwers[0]['brouwernr'];*/
				$brouwernr = 1;
				
				if(isset($_GET['brouwernr']))
				{
					$brouwerId = $_GET['brouwernr'];
				}
				
				$bierenQueryString = 'SELECT naam
										FROM bieren
											WHERE brouwernr = :brouwernr';
											
				$bierenStatement = $db->prepare($bierenQueryString);
				
				$bierenStatement->bindValue(':brouwernr',$brouwernr);
				
				$bierenStatement->execute();
				
				$bieren = array();
				
				while($row = $bierenStatement->fetch(PDO::FETCH_ASSOC))
				{
					$bieren[] = $row;
				}
				
				$bierenKolomnamen = array_keys($bieren[0]);
				
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
  
    <title>Opdracht deel2 crud query</title>

</head>

<body class="web-backend-voorbeeld">

	<section class="body">

		<form action="<?= BASE_URL ?>">
			<label for="brouwers">Selecteer brouwers</label>
			<select name="brouwrsId" id="brouwers">
			
				<?php foreach ($brouwers as $brouwer): ?>
					<option value="<?= $brouwer['brouwernr']?>"><?= $brouwer['brnaam']?></option>
						
				<?php endforeach ?>
				
				</select>
				<input type="submit" value="zoek"/>
		<table>
		<thead>
		<tr>
		<th>#</th>		
				<?php foreach ($bierenKolomnamen as $bierenKolomnaam): ?>
					<th><?= $bierenKolomnaam ?></th>
				<?php endforeach ?>
			</tr>
		</thead>
		<tbody>		
				<?php foreach ( $bieren as $nummer => $bier ): ?>
				<tr class="<?= ( ( $nummer + 1 ) % 2 !== 0 ) ? 'odd' : '' ?>">
				<td><?= ( $nummer + 1 ) ?></td>
				<?php foreach ($bier as $kolomValue): ?>
				<td><?= $kolomValue ?></td>
				<?php endforeach ?>
				</tr>
				<?php endforeach ?>
				
		</tbody>
		</table>
				
		</form>

	</section>
			
</body>
</html>