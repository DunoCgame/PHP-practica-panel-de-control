<?php	
function BuscarUser(){
	
	if(isset($_POST['Buscar'])){
		
					$user=$_POST['user'];
					
					if($user==NULL){
						echo "<p>El campo user esta vacio</p>";
					}
					if($user!=NULL ){
						if(is_numeric($user)){
							echo "<p>Tu nombre no puede ser un valor numerico</p>";
						}
						else{
							
							BuscarDatos($user);
							
						}
					}
					
				
			}	
}
	BuscarUser();
	
	
	function BuscarDatos($_user){
		
		if(isset($_user) && !empty($_user)){
				
				session_start();
					
		$host="localhost";
		$user="root";
		$pass="";
		$DB="PracticaPHPMsql";

		$conn =mysql_connect($host,$user,$pass)or die('No me pude conectar a la base de datos');
			mysql_select_db($DB,$conn) or die('No pude seleccionar la base de datos');

		$sql = "SELECT `id`, `Name`, `UserName`, `Email`, `Password` FROM `userregistrados` WHERE `Name`='$_user'";

		$result = mysql_query($sql) or die('No pude ejecutar la consulta');
		
		while ($reg=mysql_fetch_array($result)){

		// mysql_free_result($result);

		// mysql_close($conn);
		
		echo"<h1><center>Usuario</center></h1>";	
			
			
echo $reg["id"] .":" .$reg['Name'] .":" .$reg['UserName'] .":" .$reg['Email']  .":" .$reg['Password'] ;

		
			
			
		
			
		}
		
		
	

	
	}
	}

	?>
	
	
	
	
	
