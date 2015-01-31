<?php
session_start();
if(isset ($_POST['submit']))
{
	$_SESSION['send']['straat'] = $_POST['straat'];
	$_SESSION['send']['nummer'] = $_POST['nummer'];
	$_SESSION['send']['gemeente'] = $_POST['gemeente'];
	$_SESSION['send']['postcode'] = $_POST['postcode'];
	$_SESSION['send']['email'] = $_POST['email'];
	$_SESSION['send']['nickname'] = $_POST['nickname'];
}

$email = (isset ($_SESSION['send']['email'])) ? $_SESSION['send']['email']:'';
$nickname= (isset ($_SESSION['send']['nickname'])) ? $_SESSION['send']['nickname']:'';


?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>

	<h1>Pagina 2 Session</h1>

	<ul>
	<li>email: <?php echo $email ?></li>
	<li>nickname: <?php echo $nickname ?></li>
	</ul>
		<form action="session3.php" method="POST">
		<label>
		straat<input type="text" name="straat"/>
		</label>
		<label>
		nummer<input type="text" name="nummer"/>
		</label>
		<label>
		gemeente<input type="text" name="gemeente"/>
		</label>
		<label>
		postcode<input type="text" name="postcode"/>
		</label>
		<input type="submit" name="submit" value="submit"/>

	</form>
</body>
</html>