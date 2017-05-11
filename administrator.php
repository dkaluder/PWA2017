<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'head.php';?>
		<title>Administrator</title>
		<script src="paneli.js"> </script>
	</head>
	
	<body>
	<?php $page = 'administrator'; include('nav.php'); ?>




	<?php
					include "database.php";
					$query = "SELECT * FROM oglas where arhiviraj = 'ne';";
					$result = sqlsrv_query($dbc, $query);
					echo'<div class="container">    
							<div class="row">';
					while($row = sqlsrv_fetch_array($result)) {
							
					echo '<div class="col-sm-4">
								<div class="panel panel-primary">
									<div class="panel-heading">'.$row['Naziv'].'</div>' ;
						
					echo '<div class="panel-body"><img src="Img/' . $row['URLSlike'] .
						 '" class="img-responsive" style="width:100%" alt="Image">'.$row['Opis'].'<br>Cijena:'.$row['Cijena'].'kn</div>' ;
					echo '<div class="panel-footer">';
					echo '<div class="row">
							<div class="col-sm-6">
								'."<form name='switch' action='Switch.php' method='POST'>" . 
						"<input type='hidden' value='" . $row['ID'] . "' name='ID_switch'>" .
						"<button type='submit' class='btn btn-primary'>Promjeni prikazivanje</button></form>";.'
							</div>
							<div class="col-sm-6">
								'."<form name='delete' action='Delete.php' method='POST'>" . 
						"<input type='hidden' value='" . $row['ID'] . "' name='ID_delete'>" .
							"<button type='submit' class='btn btn-primary'>Obriši oglas</button></form>".
							'</div></div>';
					
							
					echo '</div>';
					echo '</div> </div>';
					}
					echo '</div></div><br>'; 
					
					sqlsrv_close($dbc);
				?>
	
	

	<br>
	<br>
		
	<?php include 'foot.php';?>
	</body>
</html>

