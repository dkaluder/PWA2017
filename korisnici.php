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
		<title>Ponuda</title>
		<script src="paneli.js"> </script>
	</head>
	
	<body>
	<?php $page = 'korisnici'; include('nav.php'); ?>




	<?php
					$stmt = $user_home->runQuery("SELECT * FROM tbl_users where userID != ".$row['userID'].";");
					$stmt->execute();
					
					echo'<div class="container">    
							<div class="row">';
					while($rowL = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$panel = ( $rowL['userRole'] == 'A' ? 'panel-danger' : 'panel-info' );		
					echo '<div class="col-sm-4">
								<div class="panel '. $panel .'">
									<div class="panel-heading">'.$rowL['userName'].'</div>' ;
						
					echo '<div class="panel-body">Email:'.$rowL['userEmail'].'<br/>';echo ($rowL['userRole'] == 'A') ? "Administrator" : "Korisnik"; echo '</div>' ;
					echo '<div class="panel-footer">';
						echo '<div class="row">
							<div class="col-sm-6">
								'."<form name='switch' action='promjeniPrava.php' method='POST'>" . 
						"<input type='hidden' value='" . $rowL['userID'] . "' name='ID_switch'>" .
						"<button type='submit' class='btn btn-primary'>Promjeni prava</button></form>".'
							</div>
							<div class="col-sm-6">
								'."<form name='delete' action='obrisiKorisnika.php' method='POST'>" . 
						"<input type='hidden' value='" . $rowL['userID'] . "' name='ID_delete'>" .
							"<button type='submit' class='btn btn-primary'>Obriši korisnika</button></form>".
							'</div></div>';
					echo ' </div>';
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

