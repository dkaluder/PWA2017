<?php 
	require_once 'class.user.php';
	$user = new USER();
	$id = $_POST['ID_delete'];	
	$stmt = $user->runQuery("DELETE FROM tbl_users WHERE userID = " . $id . " LIMIT 1;");
	$stmt->execute();
	header("Location: korisnici.php");
?>