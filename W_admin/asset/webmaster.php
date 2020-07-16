<?php 
function Fecha_Hora(){
	// $fecha = date('Y-m-d');
	// $time = time();

	 // echo $fecha." ".$time."-";
	 echo date ("d/m/Y"), " ---- ". Date ("h:i:s:A");
}
	// Fecha_Hora();
	
	
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


				echo "User"." : ".$sesion["Name"];		

		
	}
// DatosWebMaster();
	
	//numero de usuarios
function UsuariosRegistrados(){
	
	$host="localhost";
			$user="root";
			$pass="";
			$DB="PracticaPHPMsql";

			$conn =mysql_connect($host,$user,$pass)or die('No me pude conectar a la base de datos');
				mysql_select_db($DB,$conn) or die('No pude seleccionar la base de datos');
					
					
$sql = "SELECT `Name` FROM `userregistrados` WHERE 1";
			
$result = mysql_query($sql) or die('No pude ejecutar la consulta');

$sesion = mysql_fetch_array($result);

while($registros[] = mysql_fetch_array($result));

mysql_free_result($result);

mysql_close($conn);

		
		
		echo count($registros);
		echo "<br>";
		echo "<br>";
			
	for($i=0; $i<count($registros); $i++){
		
			echo $registros[$i][0];
			echo "<br>";
	}
			
			
	}
	
	
	

?>	
