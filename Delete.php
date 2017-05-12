<?php 
	include "database.php";	
	$id = $_POST['ID_delete'];	
	$query = "DELETE FROM oglas WHERE ID = " . $id . ";";
	$result = sqlsrv_query($dbc, $query) or die('Error querying databese.');
	sqlsrv_close($dbc);
	header("Location: administrator.php");
?>