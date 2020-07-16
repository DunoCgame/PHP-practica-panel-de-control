<?php



function MostrarData(){

	session_start();
	
	error_reporting(0);
	
	$DatosUser = $_SESSION['username'];
		
	echo $DatosUser;
		
	if($_SESSION['username']==null || $_SESSION['username']==" "){
	
		echo "<center><h2>No esta Autorizado</h2></center>";
		
		die();
	}
}
// MostrarData();

?>