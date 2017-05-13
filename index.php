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
		<title>O nama</title>
	</head>
	
	<body>
	<?php $page = 'index'; include('nav.php'); ?>

	<br>
	<br>
		
	<?php include 'foot.php';?>
	</body>
</html>

