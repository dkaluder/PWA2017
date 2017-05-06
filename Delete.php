<?php 
	$dbc = mysqli_connect('localhost', 'root', 'cbb446bb', 'Autotrader') or die('Error connecting to MySQL server.');
	$id = $_POST['ID_delete'];	
	$query = "DELETE FROM oglas WHERE ID = " . $id . ";";
	$result = mysqli_query($dbc, $query) or die('Error querying databese.');
	mysqli_close($dbc);
	header("Location: administrator.php");
?>