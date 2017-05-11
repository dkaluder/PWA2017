<!DOCTYPE HTML>
<html>
	<head>
		<title>Unos</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="unos.css"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
			
		<main>	
			<form name="Unos"  enctype="multipart/form-data" action="Skripta.php" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="3048576" />
			<Table>
				<tr>
				<td> <label for="naziv">Naziv vozila:</label> </td>
				<td><input id="input_naziv" type="text" name="naziv" />  </td>
				</tr>
				<tr>
				<td><label for="sifra">Šifra:</label></td>
				<td><input id="input_sifra" type="text" name="sifra" /></td>
				<tr/>
				<tr>
				<td><label for="kategorija">Kategorija:</label></td>
				<td><select id ="input_kategorija" name="kategorija" >
				  <option value="Automobil">Automobil</option>
				  <option value="Motocikl">Motocikl</option>
				  <option value="Terenac">Terenac</option>
				  <option value="Kombi">Kombi</option>
				  <option value="Kamion">Kamion</option>
				</select></td>
				<tr/>
				
				<tr>
				<td colspan="2" ><textarea id="input_opis" name="opis"   placeholder="Kratiki opis proizvoda" ></textarea> </td>
				<tr/>
				<tr>
				<td><label for="cijena">Cijena(kn):</label></td>
				<td><input id="input_cijena" type="number" name="cijena" /></td>
				<tr/>
				
				<tr>
				<td><label for="picture" >Upload slike </label></td>
				<td><input id ="picture" type="file" name="picture" accept="image/*"></td>
				<tr/>
				<tr>
				<td colspan="2" ><input id="input_arhiviraj" type="checkbox" name="arhiviraj" value="da">
				<label for="arhiviraj" >Arhiviraj </label></td>
				<tr/>
				<tr>
				<td colspan="2"  ><input type="submit" value="Pohrani" ></td>
				</tr>
			</Table>
			</form>
			
		</main>
		
		<footer>
				<p>Dubravko Kaluđer dkaluder@tvz.hr 2017</p>
		</footer>
	</body>
</html>