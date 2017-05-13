<?php 
	include "database.php";
	$id = $_POST['ID_switch'];	
	$query = "UPDATE oglas SET Arhiviraj = CASE WHEN Arhiviraj LIKE 'da' THEN 'ne' WHEN Arhiviraj LIKE 'ne' THEN 'da' END WHERE ID = " . $id . ";";
	$result = $dbc->query($query);		
	$result = null;
	$dbc = null;
	header("Location: administrator.php");
?>