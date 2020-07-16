<?php 

	session_start();
	error_reporting(0);
	
	$DatosUser = $_SESSION['username'];	
	if($_SESSION['username']==null || $_SESSION['username']==" "){
	
		echo "<center><h2>No esta Autorizado</h2></center>";
		
		die();
	}
	
	session_destroy();
	header("Location:../index.php");
	
	
	

	




?>