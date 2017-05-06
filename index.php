<!DOCTYPE HTML>
<html>
	<head>
		<title>Početna</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<header>
			<?php include("header.php"); ?>

		</header>
		
		<main>
		<p>Samo da vidim</p>
			<?php
				// PHP Data Objects(PDO) Sample Code:
				try {
				$conn = new PDO("sqlsrv:server = tcp:pwa.database.windows.net,1433; Database = Autotrader", "dkaluder", "Cbb446bb");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				catch (PDOException $e) {
					print("Error connecting to SQL Server.");
					die(print_r($e));
				}

				// SQL Server Extension Sample Code:
				$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "Cbb446bb", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
				$serverName = "tcp:pwa.database.windows.net,1433";
				$conn = sqlsrv_connect($serverName, $connectionInfo);
			?>
			
			
		</main>
		
		<footer>
			<p>Dubravko Kaluđer dkaluder@tvz.hr 2017</p>
		</footer>
	</body>
</html>

