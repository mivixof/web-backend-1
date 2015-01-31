<?php

$username = "jan";
$pasword = "pass";
$message = "";

if(isset ($_POST['submit']))
{
	if($_POST['username'] == $username && $_POST['pasword'] == $pasword)
	{
		setcookie("login",$username,time() + 3600);
			   //( "naam", value, tijd(nu)+ de extra seconden);
		header( 'location: testmetcookies.php' );
	}
	else 
	{
		$message = "U bent verkeerd verbonden";
	}
}


?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>

	<h1>cookies</h1>
				
				<?php if($message): ?>
					<?php echo $message ?>
				<?php endif ?>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="username" id="username"/>
		<input type="text" name="pasword" id="pasword"/>
		<input type="submit" name="submit" value="submit"/>

	</form>
</body>
</html>