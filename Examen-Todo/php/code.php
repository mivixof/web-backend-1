<?php
define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
session_start();

		$mess1		= '';
		$mess2		= '';
		$message	= '';
		$bmessage	= 'Je hebt geen plannen. Wil je werk? Vul dan wat in!';
		$gmessage	= '';
		$sessions 	= $_SESSION;
		
//deze code zorgt voor de message die komt als er niets is ingegeven.
//if de submit veld leeg is dan komt de message tevoorschijn.
//als er iets ingegeven wordt accepteert hij die en zet hij bij de variabele $voegToe
// elke variable die moet gedefined worden staat bij de case voor die functie
switch (isset($_POST))
{
case (isset ($_POST['submit'])):
	$voegToe = $_POST['voegToe'];
	if($voegToe == '')
	{
		$message = 'Lege todos zijn niet toegestaan...';
	}
	else
	{
		$_SESSION['submit'][] = $voegToe;
		$mess1 = 'Nog te doen';
		$mess2 = 'Gedaan ermee!';
	}
	break;

//wanneer er op de button toggle wordt geklikt dan moet hij switchen naar de ander kant
//hierbij is dat van submit naar submitted (done and done bvb)
//unset zorgt ervoor dat hij niet nog bij de kant staat waar hij daarvoor stond.
case (isset($_POST['toggle'])):
	$toggle = $_POST['toggle'];
	if (isset($_SESSION['submit'][$toggle] ))
	{
		$_SESSION['submitted'][$toggle] = $_SESSION['submit'][$toggle];
		unset($_SESSION['submit'][$toggle]);
		$mess1 = 'Nog te doen';
		$mess2 = 'Gedaan ermee!';
	}
	elseif (isset($_SESSION['submitted'][$toggle] ))
	{
		$_SESSION['submit'][$toggle] = $_SESSION['submitted'][$toggle];
		unset($_SESSION['submitted'][$toggle]);
		$mess1 = 'Nog te doen';
		$mess2 = 'Gedaan ermee!';
		$gmessage = 'Goed gedaan! Je hebt iets voltooid.';
	}
	break;
	
//de delete functie zorgt ervoor dat deze gewoon wordt unsetted (verwijderd) wanneer op de 
//button geklikt wordt.
case (isset($_POST['delete'])):
	$delete = $_POST['delete'];
	if (isset($_SESSION['submit'][$delete]))
	{
		unset($_SESSION['submit'][$delete]);
	}
	elseif (isset($_SESSION['submitted'][$delete] ))
	{
		unset($_SESSION['submitted'][$delete]);
	}
	break;
}

?>