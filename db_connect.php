<?php 

	// declaration of variable
    $server_name = 'localhost';
	$username = 'root';
	$username_password = '';
	$db_name = 'db_sensor';
	
	try{
		// Connect to the database
		$connect = new PDO('mysql:host='.$server_name.';dbname='.$db_name, $username, $username_password); 
    }
	catch(Exception $e) {
		$error =  'Received exception: '.$e->getMessage();
		echo "".$error."";
		exit();
	}
?>
