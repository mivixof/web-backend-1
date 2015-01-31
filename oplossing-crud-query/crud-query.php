<?php

	$foutMelding = '';
	
	try
	{
		$db= new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

		$queryString = 'SELECT bieren.naam, brouwers.brnaam 
						FROM `bieren` 
							INNER JOIN brouwers
								WHERE naam LIKE "Du%"
								AND brnaam LIKE "%a%"';
								
								/*
								SELECT *
									FROM `bieren` 
									INNER JOIN brouwers
										WHERE naam LIKE "Du%"
										AND brnaam LIKE "%a%"
								*/
								
				$statement = $db->prepare ($queryString);
				
				$statement->execute();
				
				var_dump($statement->fetch());
				var_dump($statement->fetch());
				var_dump($statement->fetch());
			}
		
    	catch ( PDOexception $Exception)
		{
			$foutMelding = 'Er is een fout gearriveerd!';
			throw $Exception;
		}
        	
        
    
	
?>