<?php 
	require_once 'class.user.php';
	$user = new USER();
	$id = $_POST['ID_switch'];	
	$stmt = $user->runQuery("UPDATE tbl_users SET userRole = CASE WHEN userRole LIKE 'A' THEN 'U' WHEN userRole LIKE 'U' THEN 'A' END WHERE userID = " . $id . ";");
	$stmt->execute();
	
	
	
	
	header("Location: korisnici.php");
?>