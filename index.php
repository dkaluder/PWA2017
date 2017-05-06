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

