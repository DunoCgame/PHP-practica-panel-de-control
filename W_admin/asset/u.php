<?php

function DatosWebMaster(){
		
$host="localhost";
$user="root";
$pass="";
$DB="PracticaPHPMsql";

$conn =mysql_connect($host,$user,$pass)or die('No me pude conectar a la base de datos');
	mysql_select_db($DB,$conn) or die('No pude seleccionar la base de datos');
		

$sql = "SELECT * FROM `webmaster` WHERE 1";
		
		//nombre del usuario
$result = mysql_query($sql) or die('No pude ejecutar la consulta');

$sesion = mysql_fetch_array($result);
	
		
mysql_free_result($result);

mysql_close($conn);


	echo $sesion["Web_admin"];		

		
	}

	// DatosWebMaster();

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// `Name`, `User`, `Email`, `Password`


// CREATE TABLE UserRegistrados(
 // id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 // Name VARCHAR(125),
 // UserName VARCHAR(125),
 // Email VARCHAR(125),
 // Password VARCHAR(125),
 
// );
	
// // CREATE TABLE WebMaster(
 // id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 // Name VARCHAR(125),
 // UserName VARCHAR(125),
 // Email VARCHAR(125),
 // Password VARCHAR(125),
 
// );
	// DROP DATABASE `paraborar`;
	
	
	
	
	
	function BorrarDato($_user){
		
		if(isset($_user) && !empty($_user){
				
				session_start();
					
		$host="localhost";
		$user="root";
		$pass="";
		$DB="PracticaPHPMsql";

		$conn =mysql_connect($host,$user,$pass)or die('No me pude conectar a la base de datos');
			mysql_select_db($DB,$conn) or die('No pude seleccionar la base de datos');

		$sql = "DELETE FROM `userregistrados` WHERE `Name`='$_user'";

		$result = mysql_query($sql) or die('No pude ejecutar la consulta');
		
		$sesion = mysql_fetch_array($result);
		
		if($_user == $sesion['Name']){


			echo"<h1><center> Usuario Borrado </center></h1>";			
		
		
		}

			
			
		mysql_free_result($result);

		mysql_close($conn);
			
		}
		
		
	

	
	}
	

?>

