<!DOCTYPE HTML>
<html>
	<head>
		<title>Unos</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="proizvodi.css"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
			
		<main>
		<?php
					$dbc = mysqli_connect('localhost', 'root', 'cbb446bb', 'Autotrader') or die('Error connecting to MySQL server.');
					
					$query = "SELECT * FROM oglas where arhiviraj = 'ne';";
					$result = mysqli_query($dbc, $query);
					while($row = mysqli_fetch_array($result)) { 
					echo "<Article><Table>" ;
						
						echo "<tr><td>Naziv:</td><td>" . $row['Naziv'] . '</td></tr>';
						echo "<tr><td>Sifra:</td><td>" . $row['Sifra'] . '</td></tr>';
						echo "<tr><td>Cijena:</td><td>" . $row['Cijena'] . '</td></tr>' ;
						echo "<tr><td>Kategorija:</td><td>" . $row['Kategorija'] . '</td></tr>';
						echo "<tr><td>Opis:</td><td>" . $row['Opis'] . '</td></tr>';
						echo '<tr><td colspan="2"><img src="Img/' . $row['URLSlike'] . '" /></td></tr>';
					echo "</Table></Article>";

					}
					
					mysqli_close($dbc);
				?>
		
		</main>
		
		<footer>
				<p>Dubravko Kaluđer dkaluder@tvz.hr 2017</p>
		</footer>
	</body>
</html>




