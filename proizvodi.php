<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
//	$user_home->redirect('index.php');
}
else{
$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
	<?php	if($user_home->is_logged_in()){ $page = 'proizvodi'; include('nav.php');}
			else {$page = 'proizvodi'; include('notLoggedNav.php');}
	?>




	<?php
					include "database.php";
					$query = "SELECT * FROM oglas where arhiviraj = 'ne';";
					//$result = sqlsrv_query($dbc, $query);
					echo'<div class="container">    
							<div class="row">';
					foreach($dbc->query($query) as $row) {
							
					echo '<div class="col-sm-4">
								<div class="panel panel-primary">
									<div class="panel-heading">'.$row['Naziv'].'</div>' ;
						
					echo '<div class="panel-body"><img src="Img/' . $row['URLSlike'] .'" class="img-responsive" style="width:100%" alt="Image">'.$row['Opis'].'</div>' ;
					echo '<div class="panel-footer">'. $row['Cijena'] .' kn</div>';
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

