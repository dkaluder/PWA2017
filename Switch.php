<?php 
	include "database.php";
		
		
	$id = $_POST['ID_switch'];	
	$query = "UPDATE oglas SET Arhiviraj = CASE WHEN Arhiviraj LIKE 'da' THEN 'ne' WHEN Arhiviraj LIKE 'ne' THEN 'da' END WHERE ID = " . $id . ";";
	$result = sqlsrv_query($dbc, $query) or die('Error querying databese.');
	sqlsrv_close($dbc);
	header("Location: administrator.php");
?>