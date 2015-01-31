<?php

$db= new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

$sql = 'SELECT * FROM `brouwers` WHERE 1' ;

$statement = $db->prepare($sql);
				
$statement->execute();
				
$brouwers = array();
				
while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$brouwers[] = $row;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<title>DELETE</title>
</head>
<body>
<table>
	<thead>
		<tr>
            <th>#</th>
            <th>brouwernr</th>
            <th>brnaam</th>
			<th>adres</th>
            <th>postcode</th>
            <th>gemeente</th>
			<th>omzet</th>
            <th></th>
        </tr>
      </thead>
	<tbody>
		<?php foreach ($brouwers as $brouwer): ?>
		<tr>
			<td><?= $brouwer['brouwernr'] ?></td>
			<td><?= $brouwer['brnaam'] ?></td>
			<td><?= $brouwer['adres'] ?></td>
			<td><?= $brouwer['postcode'] ?></td>
			<td><?= $brouwer['gemeente'] ?></td>
			<td><?= $brouwer['omzet'] ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
</body>
</html>