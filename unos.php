<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'head.php';?>
		<title>Prodaja vozila</title>
		

	</head>
	<body>
	
	<?php $page = 'unos'; include('nav.php'); ?>
	
	<div class="container ">
	
	
	<form name="Unos"  enctype="multipart/form-data" action="pohrani.php" method="POST" class="form-horizontal ">
		  <h2>Unos novog oglasa</h2>
		  
		  <div class="form-group">
			<label for="naziv">Naziv vozila:</label>
			<input type="text" class="form-control" name="naziv" id="naziv" placeholder="Unesite naziv automobila">
			<small id="nazivHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
			<label for="sifra">Šifra vozila:</label>
			<input type="text" class="form-control" name="sifra" id="sifra" placeholder="Unesite sifru automobila">
			<small id="sifraHelp" class="form-text text-muted"></small>
		  </div>
	
		  <div class="form-group">
			<label for="kategorija">Kategorija vozila</label>
			<select class="form-control" name="kategorija" id="kategorija">
				  <option value="" disabled selected>Odaberi kategoriju</option>
			      <option value="Automobil">Automobil</option>
				  <option value="Motocikl">Motocikl</option>
				  <option value="Oldtimer">Oldtimer</option>
				  <option value="Kamper">Kamper</option>
				  <option value="Kamion">Kamion</option>
			</select>
			<small id="kategorijaHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
			<label for="opis">Opis vozila:</label>
			<textarea class="form-control" name="opis" rows="3" id="opis"></textarea>
			<small id="opisHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
			<label for="cijena">Cijena vozila(kn):</label>
			<input type="number" class="form-control" name="cijena" id="cijena" >
			<small id="cijenaHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
			<label for="picture">Upload slike</label>
			<input type="file" name="picture" class="form-control-file" id="picture" aria-describedby="fileHelp" accept="image/*">
			<small id="fileHelp" class="form-text text-muted">Maksimalna veličina slike je 3 Mb. </small>
		  </div>
		  
		  <div class="form-check">
			<label class="form-check-label" for="arhiviraj">
			  <input type="checkbox" class="form-check-input" id="arhiviraj" name="arhiviraj" value="da">
			  Arhiviraj
			</label>
			<small id="arhivirajHelp" class="form-text text-muted"></small>
		  </div>
		  <button type="submit" class="btn btn-primary" id="spremi">Pohrani</button>
	</form>
	</div>
	
	<br>
	<br>
		
	<?php include 'foot.php';?>
	 <script src="kontrolUnos.js"></script>  
	</body>
</html>

