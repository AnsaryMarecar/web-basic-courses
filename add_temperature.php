<?php 
	include('db_connect.php');
	if(isset($_GET['temperature_value'])){
		
		$temperature_value = (double) htmlspecialchars($_GET['temperature_value']);
		
		// Read our request
		$request_text = "INSERT INTO t_temperature (temperature_value) VALUES (:temperature_value) ";
		
		//Prepare our statemen.
        $statement = $connect->prepare($request_text);

        //Bind our values to our parameters (we called them :make and :model).
        $statement->bindValue(':temperature_value',  $temperature_value );

        //Execute the statement and insert our values.																																																																																						
        $statement_executed = $statement->execute();
			
		if ($statement_executed) {
		  echo "New temperature record added successfully";
		} 
		else {
		  echo "Error: " . $request_text . "<br>".$connect->connect_error;
		}
		
		// Close our connection
		//$connect->query('KILL CONNECTION_ID()');
		//$connect = null;
	}
	else{
		echo "error SQL statement";
		// Close our connection
		//$connect->query('KILL CONNECTION_ID()');
		//$connect = null;
		exit();
	}
?>