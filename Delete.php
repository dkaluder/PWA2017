<?php 
	include "database.php";	
	$id = $_POST['ID_delete'];
	$queryGetImage="SELECT oglas.URLSlike FROM oglas where oglas.id = ".$id."";
	$red = $dbc->query($queryGetImage);
	$column = $red->fetchColumn();
	if($column != 'noPicture.jpg')
	{
		unlink('Img/'.$column);
	}
	$query = "DELETE FROM oglas WHERE ID = " . $id . ";";
	$result = $dbc->query($query);		
	$result = null;
	$dbc = null;
	header("Location: administrator.php");
?>