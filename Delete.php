<?php 
	include "database.php";	
	$id = $_POST['ID_delete'];
	$queryGetImage="SELECT oglas.URLSlike FROM oglas where oglas.id = ".$id." LIMIT 1;";
	$red = $dbc->query($queryGetImage);
	$column = $red->fetchColumn();
	unlink('Img/'.$column);
	$query = "DELETE FROM oglas WHERE ID = " . $id . " LIMIT 1;";
	$result = $dbc->query($query);		
	$result = null;
	$dbc = null;
	header("Location: administrator.php");
?>