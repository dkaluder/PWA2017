<!DOCTYPE HTML>
<html>
	<head>
		<title>Unos</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
			
		<main>
		
		<?php
		
			$naziv = $_POST['naziv'];
			$sifra = $_POST['sifra'];
			$cijena = $_POST['cijena'];
			$kategorija = $_POST['kategorija'];
			$opis = $_POST['opis'];
			$slika  = $_FILES['picture'];
			$picture = $_FILES['picture']['name'];
			$target = 'Img/' . $picture;
			move_uploaded_file($_FILES['picture']['tmp_name'], $target);
			
			if(isset($_POST['arhiviraj']) && 
			   $_POST['arhiviraj'] == 'da') 
			{
				$arhiviraj = 'da';
			}
			else
			{
				$arhiviraj = 'ne';
			}    

			echo "<h1>" .$kategorija. "&nbsp; &nbsp;" . $naziv . '<br />' . "</h1>";
			echo "Sifra: &nbsp;" . $sifra . "<br />";
			echo "Cijena: &nbsp;" . $cijena . "kn <br />";
			echo $opis . "<br />";
			echo "Arhiviraj: " . $arhiviraj . "<br />";
			echo '<img src="Img/' . $picture . '" />';

			
			// SQL Server Extension Sample Code:
				$connectionInfo = array("UID" => "dkaluder@pwa", "pwd" => "Cbb446bb", "Database" => "Autotrader", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
				$serverName = "tcp:pwa.database.windows.net,1433";
				$dbc = sqlsrv_connect($serverName, $connectionInfo);
			
			
			
			//$dbc = mysqli_connect('localhost', 'root', 'cbb446bb', 'Autotrader') or die('Error connecting to MySQL server.');
			
			$query = "INSERT INTO oglas (Naziv, Sifra, Cijena, Kategorija, Opis, Arhiviraj, URLSlike) 
					VALUES ('$naziv', '$sifra', '$cijena', '$kategorija', '$opis', '$arhiviraj', '$picture')";
					
					$result = sqlsrv_query($dbc, $query) or die('Error querying databese.');
					
					sqlsrv_close($dbc);
		?>	
		</main>
		
		<footer>
				<p>Dubravko Kaluðer dkaluder@tvz.hr 2017</p>
		</footer>
	</body>
</html>




