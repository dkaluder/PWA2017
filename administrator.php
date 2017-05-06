<!DOCTYPE HTML>
<html>
	<head>
		<title>Unos</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="administrator.css"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
			
		<main>
		<?php
		
					// SQL Server Extension Sample Code:
					$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "Cbb446bb", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
					$serverName = "tcp:pwa.database.windows.net,1433";
					$dbc = sqlsrv_connect($serverName, $connectionInfo);
					
					//$dbc = mysqli_connect('localhost', 'root', 'cbb446bb', 'Autotrader') or die('Error connecting to MySQL server.');
					
					$query = "SELECT * FROM oglas;";
					$result = sqlsrv_query($dbc, $query);
					
					while($row = sqlsrv_fetch_array($result)) { 
						echo "<Article><Table>" ;
						echo "<tr><td>Naziv:</td><td>" . $row['Naziv'] . '</td></tr>';
						echo "<tr><td>Sifra:</td><td>" . $row['Sifra'] . '</td></tr>';
						echo "<tr><td>Cijena:</td><td>" . $row['Cijena'] . '</td></tr>' ;
						echo "<tr><td>Kategorija:</td><td>" . $row['Kategorija'] . '</td></tr>';
						echo "<tr><td>Opis:</td><td>" . $row['Opis'] . '</td></tr>';
						echo "<tr><td>Arhiviraj:</td><td>" . $row['Arhiviraj'] . '</td></tr>';
						echo '<tr><td class="slika" colspan="2"><img src="Img/' . $row['URLSlike'] . '" /></td></tr>';
						echo "<tr><td>";
						
						echo "<form name='delete' action='Delete.php' method='POST'>" . 
						"<input type='hidden' value='" . $row['ID'] . "' name='ID_delete'>" .
							"<input type='submit' value='Obriši unos'> </form>" ;
						
						
						echo "</td><td>";
						echo "<form name='switch' action='Switch.php' method='POST'>" . 
						"<input type='hidden' value='" . $row['ID'] . "' name='ID_switch'>" .
							"<input type='submit' value='Promjeni prikazivanje'> </form>";
						echo "</td></tr>";
						echo "</Table></Article>";
					}

					sqlsrv_close($dbc);
				?>
		</main>
		
		<footer>
				<p>Dubravko Kaluđer dkaluder@tvz.hr 2017</p>
		</footer>
	</body>
</html>


