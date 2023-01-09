<?php 
	include('db_connect.php');
	if(isset($_GET['subject'])){
		$temperature_value = $_GET['subject'];
		
		// Requête de lecture
		$request_text = "INSERT INTO t_sensor (temperature_value) VALUES (:temperature_value) ";
		
		//Prepare our statemen.
        $statement = $connect->prepare($request_text);

        //Bind our values to our parameters (we called them :make and :model).
        $statement->bindValue(':temperature_value', htmlspecialchars( $temperature_value ));

        //Execute the statement and insert our values.																																																																																						
        $statement_executed = $statement->execute();
			
		if ($statement_executed) {
		  echo "New temperature record added successfully";
		} 
		else {
		  echo "Error: " . $request_text . "<br>".$connect->connect_error);
		}
	}
	
	// Fermeture de la connexion
	$connect->close();
	
	else{
		exit();
	}
?>