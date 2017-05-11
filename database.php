<?php
	$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "Cbb446bb", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:pwa.database.windows.net,1433";
	$dbc = sqlsrv_connect($serverName, $connectionInfo);
?>