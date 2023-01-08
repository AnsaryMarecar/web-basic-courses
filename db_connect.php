<?php 

			// Déclaration de variable
            $serveur_nom = 'localhost';
            $identifiant = 'root';
            $mot_de_passe = '';
			$base_de_donnee_nom = 'db_sensor';
			$temperature_cold = 18;
			$temperature_hot = 22;
            
            // Etablissement de la connexion à la base de données
            $connect = new mysqli($serveur_nom, $identifiant, $mot_de_passe, $base_de_donnee_nom);
			new mysqli("example.com", "user", "password", "database");
            
            // Vérification de la connexion à la base de données
            if($connect->connect_error){
				echo "<li>Aucune température de trouvée</li>";
                die('Erreur, impossibilité de se connecter. Erreur affichée : ' .$connect->connect_error);
				exit();
            }else{	
				//connexion établie
			}
			
	function mysqli_myquery($CONNEXION, $REQUETE) {
		// Exécute une requête SQL avec gestion d'erreur intégrée.
		$RESULTAT = CONNEXION->query($REQUETE);
		if (!$RESULTAT) die("<br>".$CONNEXION->error."<br>Dans la requête : <b>$REQUETE</b>");
		return $RESULTAT;
	}
?>
