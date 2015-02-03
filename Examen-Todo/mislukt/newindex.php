<?php
	function __autoload ($className)
	{
		include_once('classes/'. $className . '.php');
	}
	
	$pagina = new builder();

?>
	<?=$pagina->getCode();?>
	<?=$pagina->getHeader();?>
	<?=$pagina->getBody();?>
	<?=$pagina->getFooter();?>

