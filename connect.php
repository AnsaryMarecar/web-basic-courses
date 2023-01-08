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
            }else{	
				// echo 'Connexion établie';
				
				// Requête de lecture
				$requete = $mysqli->query("SELECT temperature_value FROM temperature ORDER BY temperature");
				
				// Afficher les températures issues de la requête de lecture
				foreach ($requete as $ligne) {
					if($ligne['temperature_value']< $temperature_cold ){
						echo "<li class=""> Température mesurée : " . $ligne['temperature_value'] . "°C </li>";
					}
					ELSE IF ($ligne['temperature_value']> $temperature_cold && $ligne['temperature_value']< $temperature_hot){
						echo "<li class=""> Température mesurée : " . $ligne['temperature_value'] . "°C </li>";
					}
					ELSE {
						echo "<li class=""> Température mesurée : " . $ligne['temperature_value'] . "°C </li>";
					}
				}
			}
			
			
			// Fermeture de la connexion
			$connect->close();
?>