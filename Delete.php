<?php 
	// SQL Server Extension Sample Code:
			$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "Cbb446bb", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
			$serverName = "tcp:pwa.database.windows.net,1433";
			$dbc = sqlsrv_connect($serverName, $connectionInfo);
			
	//$dbc = mysqli_connect('localhost', 'root', 'cbb446bb', 'Autotrader') or die('Error connecting to MySQL server.');
	$id = $_POST['ID_delete'];	
	$query = "DELETE FROM oglas WHERE ID = " . $id . ";";
	$result = sqlsrv_query($dbc, $query) or die('Error querying databese.');
	sqlsrv_close($dbc);
	header("Location: administrator.php");
?>