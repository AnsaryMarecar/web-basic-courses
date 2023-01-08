<?php

	include('db_connect.php');
	$temperature_cold = 18;
	$temperature_hot = 22;
				
	// Requête de lecture
				
	$request_text = "SELECT temperature_value FROM temperature ORDER BY temperature";
	$statement = $connect->query($request);
	foreach  ($statement as $row) {
				
		// Afficher les températures issues de la requête de lecture
		IF($row['temperature_value']< $temperature_cold ){
			echo "<li class=""> Température mesurée : " . $row['temperature_value'] . "°C </li>";
		}
		ELSE IF ($row['temperature_value']> $temperature_cold && $row['temperature_value']< $temperature_hot){
			echo "<li class=""> Température mesurée : " . $row['temperature_value'] . "°C </li>";
		}
		ELSE {
			echo "<li class=""> Température mesurée : " . $row['temperature_value'] . "°C </li>";
		}
				
	}			
	// Fermeture de la connexion
	$connect->close();
?>