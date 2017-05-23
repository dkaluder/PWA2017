<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('login.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
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
							<div class="panel panel-success">
								<div class="panel-heading">'.$kategorija.': '.$naziv.'</div>' ;
						
			echo 				'<div class="panel-body"><img src="Img/' . ($picture == "")?"noPicture.jpg":$picture .
										'" class="img-responsive" style="width:100%" alt="'.$picture.'">'.
										'<br>Cijena:'.$cijena.'kn<br>Sifra:'.$sifra.'<br>U arhivu:'. $arhiviraj .'</div>' ;
					
			echo 				'<div class="panel-footer">'. $opis.' </div>';
			echo 			'</div>
						</div>';
					
			echo	'</div>
				</div>
				<br>'; 
			
			
			
			
			
			
			
			
			include "database.php";
			($picture == "") ?  $query = "INSERT INTO oglas (Naziv, Sifra, Cijena, Kategorija, Opis, Arhiviraj) 
													VALUES ('$naziv', '$sifra', '$cijena', '$kategorija', '$opis', '$arhiviraj')" :		
								$query = "INSERT INTO oglas (Naziv, Sifra, Cijena, Kategorija, Opis, Arhiviraj, URLSlike) 
													VALUES ('$naziv', '$sifra', '$cijena', '$kategorija', '$opis', '$arhiviraj', '$picture')";
			$result = $dbc->query($query);		
			$result = null;
			$dbc = null;
					
		?>	
	
	

	<br>
	<br>
		
	<?php include 'foot.php';?>
	</body>
</html>

