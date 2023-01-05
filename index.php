<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <h1>Relevé station météo</h1>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <!-- En-tête de page -->
    <header>
      <h1>Relevé station météo</h1>

		<!-- Menu -->
		<nav class="menu">
			<ul class="link-menu">
				<li><a href="#">Accueil</a></li>
				<li><a href="#">Relevé station météo</a></li>
				<li><a href="#">A propos du capteur</a></li>
			</ul>

			<!-- Formulaire de recherche -->
			<form class="search-menu">
				<input class="input-texte" type="search" name="q" placeholder="Rechercher">
				<input class="btn-submit" type="submit" value="Lancer !">
			</form>
		</nav>
	
	</header>
		
    <!-- Contenu de la page -->
    <main>


      <aside>
			<h2>Lister les températures : </h2>
			<ul class="liste-relation">
				<?php 
					//include('../dossier/fichier.php'); 
					echo "."; 
				?>
			</ul>
      </aside>

    </main>

    <!-- Pied de page -->
    <footer class="footer">
      <p>©Copyright 2023 par Ansary MARECAR. Licence MIT</p>
    </footer>

  </body>
</html>
