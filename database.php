<?php
	/*azure
	$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:pwa.database.windows.net,1433";
	$dbc = sqlsrv_connect($serverName, $connectionInfo);
	*/
	// PHP Data Objects(PDO) Sample Code:
		try {
			$dbc = new PDO("sqlsrv:server = tcp:bazapwa.database.windows.net,1433; Database = pwa2017", "dkaluder", "");
			$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}
	//localhost
	/*$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:pwa.database.windows.net,1433";
	$dbc = sqlsrv_connect($serverName, $connectionInfo);
	*/
	// PHP Data Objects(PDO):
	/*try {
		$dbc = new PDO("mysql:host=localhost;dbname=Autotrader", 'root', '');
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		print("Error connecting to SQL Server.");
		die(print_r($e));
	}*/
?>