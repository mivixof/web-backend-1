<?php

	class HTMLBuilder
	{
		protected $header 		= '';
		protected $body 		= '';
		protected $footer 		= '';
		public function __construct()
		{
		}
		public function getHeader()
		{
			include ('HTML/header.partial.php');
			new RecursiveDirectoryIterator('CSS/');
		}
		public function getBody()
		{
			include ('HTML/body.partial.php');
		}
		public function getFooter()
		{
			include ('HTML/footer.partial.php');
			new RecursiveDirectoryIterator('js/');
		}
	}
		
?>