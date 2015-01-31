<?php
session_start();

if(isset ($_POST['submit']))
{
	$_SESSION['send']['email'] = $_POST['email'];
	$_SESSION['send']['nickname'] = $_POST['nickname'];
}
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>

	<h1>Pagina 1 Session</h1>
					
		<form action="session2.php" method="POST">
		<label>email<input type="text" name="email" id="username"/></label>
		<label>nickname<input type="text" name="nickname" id="pasword"/></label>
		<input type="submit" name="submit" value="submit"/>
		</form>
		
</body>
</html>