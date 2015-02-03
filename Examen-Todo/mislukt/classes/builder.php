<?php

	class builder
	{
		protected $code			= '';
		protected $header 		= '';
		protected $body 		= '';
		protected $footer 		= '';
		public function __construct()
		{
		}
		public function getCode()
		{
			include ('php/code.php');
		}
		public function getHeader()
		{
			include ('html/header.php');
			new RecursiveDirectoryIterator('css/');
		}
		public function getBody()
		{
			include ('html/body.php');
		}
		public function getFooter()
		{
			include ('html/footer.php');
		}
	}
		
?>