<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'head.php';?>
		<title>Uspješna predaja oglasa</title>
	</head>
	
	<body>
	<?php $page = 'pohrani'; include('nav.php'); ?>
	
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
			
			echo'<div class="container">    
					<div class="row">';			
			echo 		'<div class="col-sm-4">
							<div class="panel panel-primary">
								<div class="panel-heading">'.$kategorija.': '.$naziv.'</div>' ;
						
			echo 				'<div class="panel-body"><img src="Img/' . $picture .
										'" class="img-responsive" style="width:100%" alt="'.$picture.'">'.
										'<br>Cijena:'.$cijena.'kn<br>Sifra:'.$sifra.'<br>U arhivu:'. $arhiviraj .'</div>' ;
					
			echo 				'<div class="panel-footer">'. $opis.' kn</div>';
			echo 			'</div>
						</div>';
					
			echo	'</div>
				</div>
				<br>'; 
			
			
			
			
			
			
			
			
			include "database.php";
			$query = "INSERT INTO oglas (Naziv, Sifra, Cijena, Kategorija, Opis, Arhiviraj, URLSlike) 
					VALUES ('$naziv', '$sifra', '$cijena', '$kategorija', '$opis', '$arhiviraj', '$picture')";
					
					$result = sqlsrv_query($dbc, $query) or die('Error querying databese.');
					
					sqlsrv_close($dbc);
		?>	
	
	

	<br>
	<br>
		
	<?php include 'foot.php';?>
	</body>
</html>

