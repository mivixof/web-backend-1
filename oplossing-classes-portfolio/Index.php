<?php

	function __autoload ($className)
	{
		include_once('classes/'. $className . '.php');
	}
	
	$pagina = new HTMLBuilder();

?>

	<?=$pagina->getHeader();?>
	<?=$pagina->getBody();?>
	<?=$pagina->getFooter();?>

