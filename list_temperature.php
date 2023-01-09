<?php

	include('db_connect.php');
	$temperature_cold = 18;
	$temperature_hot = 22;
				
	// read request
	$request_text = "SELECT temperature_value,temperature_timestamp FROM t_temperature ORDER BY temperature_id DESC";
	$statement = $connect->query($request_text);
	$rows = $statement->fetchAll();
	foreach  ($rows as $row) {
		
		
		$temperature_value=(string)$row['temperature_value'];
		$temperature_timestamp=$row['temperature_timestamp'];
		// print 
		IF($row['temperature_value'] < $temperature_cold ){
			echo "<tr class='backblue'><td> ". $temperature_value . "°C </td><td> ".$temperature_timestamp." </td></td>";
		}
		ELSE IF ($row['temperature_value']> $temperature_cold AND $row['temperature_value']< $temperature_hot){
			echo "<tr class='backgreen'><td> ". $temperature_value . "°C </td><td> ".$temperature_timestamp." </td></td>";
		}
		ELSE {
			echo "<tr class='backred'><td> ". $temperature_value . "°C </td><td> ".$temperature_timestamp." </td></td>";
		}
				
	}			
	// close connection
	$connect->query('KILL CONNECTION_ID()');
	$connect = null;
?>