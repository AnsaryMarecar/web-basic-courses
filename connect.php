<?php
			// Déclaration de variable
            $serveur_nom = 'localhost';
            $identifiant = 'root';
            $mot_de_passe = '';
			$base_de_donnee_nom = 'db_sensor';
            
            // Etablissement de la connexion
            $connect = new mysqli($serveur_nom, $identifiant, $mot_de_passe, $base_de_donnee_nom);
			new mysqli("example.com", "user", "password", "database");
            
            // Vérification de la connexion
            if($connect->connect_error){
                die('Erreur, impossibilité de se connecter. Erreur affichée : ' .$connect->connect_error);
            }else{	
				echo 'Connexion établie';
				
				// Requête de lecture
				$requete = $mysqli->query("SELECT temperature_value FROM temperature ORDER BY temperature");
				
				// Afficher les températures issues de la requête de lecture
				foreach ($requete as $ligne) {
					echo " Tepérature mesurée : " . $ligne['temperature_value'] . "°C \n";
				}
			}
			
			
			// Fermeture de la connexion
			$connect->close();
			
			// Forcé la sortie
			exit();
?>