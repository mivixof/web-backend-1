<?php
session_start();
if(isset ($_POST['submit']))
{
	$_SESSION['send']['straat'] = $_POST['straat'];
	$_SESSION['send']['nummer'] = $_POST['nummer'];
	$_SESSION['send']['gemeente'] = $_POST['gemeente'];
	$_SESSION['send']['postcode'] = $_POST['postcode'];
}

$straat = (isset ($_SESSION['send']['straat'])) ? $_SESSION['send']['straat']:'';
$nummer = (isset ($_SESSION['send']['nummer'])) ? $_SESSION['send']['nummer']:'';
$gemeente = (isset ($_SESSION['send']['gemeente'])) ? $_SESSION['send']['gemeente']:'';
$postcode = (isset ($_SESSION['send']['postcode'])) ? $_SESSION['send']['postcode']:'';
$email = (isset ($_SESSION['send']['email'])) ? $_SESSION['send']['email']:'';
$nickname= (isset ($_SESSION['send']['nickname'])) ? $_SESSION['send']['nickname']:'';


?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>

	<h1>Pagina 3 Session</h1>

	<ul>
	<li>email: <?php echo $email ?></li>
	<li>nickname: <?php echo $nickname ?></li>
	<p></p>
	<li>straat: <?php echo $straat ?></li>
	<li>nummer: <?php echo $nummer ?></li>
	<li>gemeente: <?php echo $gemeente ?></li>
	<li>postcode: <?php echo $postcode ?></li>
	</ul>
	
</body>
</html>