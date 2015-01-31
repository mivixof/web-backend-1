<?php
	/*session_start();*/
	
	define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );
	/*$message = false;*/
			if(isset ($_POST['submit']))
				{
				$brnaam 	= $_POST['brnaam'];
				$adres 		= $_POST['adres'];
				$postcode 	= $_POST['postcode'];
				$gemeente 	= $_POST['gemeente'];
				$omzet 		= $_POST['omzet'];
				
				$db= new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
		
				$QueryString = 'INSERT INTO brouwers
								(brnaam, adres, postcode, gemeente, omzet)
								VALUES(:brnaam, :adres, :postcode, :gemeente, :omzet)';
						 
				$statement = $db->prepare($QueryString);
				
				$statement->bindValue(':brnaam', $brnaam);
				$statement->bindValue(':adres', $adres);
				$statement->bindValue(':postcode', $postcode);
				$statement->bindValue(':gemeente', $gemeente);
				$statement->bindValue(':omzet', $omzet);
				
				$statement->execute();
				var_dump($statement->errorInfo());
				}
				var_dump($_POST);
				
				/*$errorArray = $statement->errorInfo();
				
				if($errorArray[0] === '00000')
				{
					$_SESSION['message']['type'] = 'succes';
					$_SESSION['message']['text'] = 'de brouwer' . $brnaam . 'is succesvol toegevoegd' ;
				}
				else
				{
					$_SESSION['message']['type'] = 'Fout';
					$_SESSION['message']['text'] = 'de brouwer' . $brnaam . 'kon niet toegevoegd worden' ;
				}
		if(isset($_SESSION['message']))
		{
			$message['type'] = $_SESSION['message']['type'];
			$message['text'] = $_SESSION['message']['text'];
		}	*/	 
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
  
    <title> INSERT </title>

</head>

<body>
<form action="<?= BASE_URL ?>" method="POST">
	<label>Brouwernaam</label>	
		<input type="text" id="brnaam" name="brnaam" value="John"/>
	<label>Adres</label>		
		<input type="text" id="adres" name="adres" value="Sesame street"/>
	<label>Postcode</label>		
		<input type="text" id="postcode" name="postcode" value="5555"/>
	<label>Gemeente</label>		
		<input type="text" id="gemeente" name="gemeente" value="Wonderland"/>
	<label>Omzet</label>	
		<input type="text" id="omzet" name="omzet" value="8569"/>
		
		<input type="submit" value="submit" name="submit"/>
</form>
</body>

</html>