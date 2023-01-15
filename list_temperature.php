<?php

	// Connexion à la base de données
	include('db_connect.php');
	
	// Déclaration de variable
	$temperature_cold 			= 18.00	;	//Température froide en dessous
	$temperature_hot 			= 22.00	;	// Température chaude au dessus
	$temperature_double_value 	= -99.00; 	// Température saisie
				
	// Lecture de la requête
	$request_text = "SELECT temperature_value,temperature_timestamp FROM t_temperature ORDER BY temperature_id DESC";
	$statement = $connect->query($request_text);
	$rows = $statement->fetchAll();
	
	// Affichage de chaque ligne enregistrée dans la table de la base de données
	foreach  ($rows as $row) {
		
		$temperature_double_value 	= $row['temperature_value']			;	// Récupération de la variable courante température
		$temperature_string_value 	=(string)$temperature_double_value	;	// Typage pour un usage d'affichage
		$temperature_timestamp		= $row['temperature_timestamp']		;	// Récupération du TIMESTAMP courante
		
		// Afficher la donnée
		echo "<tr class=''><td> ". $temperature_value . "°C </td><td> ".$temperature_timestamp." </td></td>";		
		
		// SI $temperature_double_value < $temperature_cold ALORS  
			// Afficher la donnée
		// FERMER LA CONDITION
		
		// SI $temperature_double_value > $temperature_cold ET $temperature_double_value < $temperature_hot ALORS  
			// Afficher la donnée
		// FERMER LA CONDITION
		
		// SINON ALORS  
			// Afficher la donnée
		// FERMER LA CONDITION
		
		
		
	}
?>













<?php
//IF($joueur == "MBAPPE"){			// SI $joueur = "MPAPPE" ALORS
//		echo "PSG" ; 				// Afficher la donnée
//}									// FERMER LA CONDITION
//ELSE IF ($joueur == "MICHUT") {		// SINON SI $joueur = "MICHUT" ALORS
//	echo "Sunderland";				// Afficher la donnée
//}									// FERMER LA CONDITION
//ELSE{								// SINON 
//	Echo "Inconnu";					// Afficher la donnée
//}									// FERMER LA CONDITION
?>
