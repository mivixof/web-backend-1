<?php

	function autoloader ($className)
	{
		include_once('classes/'. $className . '.php');
	}
	
	spl_autoload_register('autoloader');

	$animals['kermit'] = new Animal ('Kermit', 'm', '100');
	$animals['dikkie'] = new Animal ('Dikkie', 'm', '90');
	$animals['flipper'] = new Animal ('Flipper', 'v', '80');
	
	$simba = new Lion('Simba','m','80','Savanne');
	
	$lions['Simba'] = new Lion ('Simba', 'm', '80', 'Congo Lion');
	$lions['Toby'] = new Lion ('Toby', 'm', '70', 'Kenia Lion');
	
	$zebras['Zeke'] = new Zebra ('Zeke', 'm', '80', 'Congo Zebra');
	$zebras['Zana'] = new Zebra ('Zana', 'f', '60', 'Kenia Zebra');
	
	var_dump($simba);
?>
<!DOCTYPE html>
<html>
<head>
<title>app</title>
</head>
<body>
Frogs
<?php foreach($animals as $animal): ?>
<p>Naam= <?= $animal->getName(); ?> geslacht= <?= $animal->getSex(); ?> Gezondheid= <?= $animal->getHealth(); ?></p>
<?php endforeach ?>
Lions
<?php foreach($lions as $lion): ?>
<p>Naam= <?= $lion->getName(); ?> geslacht= <?= $lion->getSex(); ?> Gezondheid= <?= $lion->getHealth(); ?>
Speciaal= <?= $lion->doSpecialMove();?></p>
<?php endforeach ?>
Zebras
<?php foreach($zebras as $zebra): ?>
<p>Naam= <?= $zebra->getName(); ?> geslacht= <?= $zebra->getSex(); ?> Gezondheid= <?= $zebra->getHealth(); ?>
Speciaal= <?= $zebra->doSpecialMove();?></p>
<?php endforeach ?>

</body>
</html>
