<?php 

			// Déclaration de variable
            $server_name = 'localhost';
            $username = 'root';
            $user_password = '';
			$db_name = 'db_sensor';
            
			try{
				// Etablissement de la connexion à la base de données
				$connect = new PDO('mysql:host='.$server_name.';dbname='.$db_name, $username, $username_password); 
            }
			catch{
				echo "<li>Aucune température de trouvée</li>";
                die('Erreur, impossibilité de se connecter. Erreur affichée : ' .$connect->connect_error);
				exit();
			}
			
	function mysqli_myquery($CONNEXION, $REQUETE) {
		// Exécute une requête SQL avec gestion d'erreur intégrée.
		$RESULTAT = CONNEXION->query($REQUETE);
		if (!$RESULTAT) die("<br>".$CONNEXION->error."<br>Dans la requête : <b>$REQUETE</b>");
		return $RESULTAT;
	}
?>
