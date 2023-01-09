<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_station_meteo.css">
  </head>

  <body>
    <!-- Head page -->
    <header>
      <h1>Weather channel  </h1>

		<!-- Menu -->
		<nav class="menu">
			<ul class="link-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="list_temperature.php">Database </a></li>
				<li><a href="add_temperature.php">Add</a></li>
			</ul>
		</nav>
	
	</header>
		
    <!-- Main page information -->
    <main>
      <div style="width:500px; height: 400px; background-color:grey: color: white;">
			<h2>Temperature dataset: </h2>
			<table class="liste-relation">
				<?php 
					//include('list_temperature.php'); 
				?>
			</table>
      </div>
	  
	  <!-- Form to add temperature -->
	  <div class="form">
		<form action="add_temperature.php" method="get">
			<div>
				<label for="temperature_value">Add your new temperature value: </label>
				<input type="number" id="temperature_value" required name="temperature_value" value="0">
				<input type="submit" name="Add" value="Add">
			</div>
		</form>
	  </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
      <p>©Copyright 2023 BY Ansary MARECAR. Licence MIT</p>
    </footer>

  </body>
</html>
