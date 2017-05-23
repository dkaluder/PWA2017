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
if($row["userRole"] != "A")
{
	$user_home->redirect('index.php');
}
?>

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
					$query = "SELECT * FROM oglas;";
					
					echo'<div class="container">    
							<div class="row">';
					foreach($dbc->query($query) as $row) {
						
					$panel = ( $row['Arhiviraj'] == 'ne' ? 'panel-success' : 'panel-info' );		
					echo '<div class="col-sm-4">
								<div class="panel '.$panel.'">
									<div class="panel-heading">'.$row['Naziv'].'</div>' ;
						
					echo '<div class="panel-body"><img src="Img/' . $row['URLSlike'] .
						 '" class="img-responsive" style="width:100%" alt="Image">'.$row['Opis'].'<br>Cijena:'.$row['Cijena'].'kn<br>U arhivi:'. $row['Arhiviraj'] .'</div>' ;
					echo '<div class="panel-footer">';
					echo '<div class="row">
							<div class="col-sm-6">
								'."<form name='switch' action='Switch.php' method='POST'>" . 
						"<input type='hidden' value='" . $row['ID'] . "' name='ID_switch'>" .
						"<button type='submit' class='btn btn-primary'>Promjeni prikazivanje</button></form>".'
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
					
					$dbc = null;
				?>
	
	

	<br>
	<br>
		
	<?php include 'foot.php';?>
	</body>
</html>

