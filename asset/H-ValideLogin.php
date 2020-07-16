<?php
if(isset($_POST['sumit'])){
		
		$user=$_POST['user'];
		$pass=$_POST['pass'];	

		if($user==NULL){ echo "<p>El campo user esta vacio</p>"; 	}
		if($pass==NULL){ echo "<p>El campo passwrd esta vacio</p>";	}

		if($user!=NULL && $pass!=NULL){
			
			if(is_numeric($user)){ 	echo "Tu nombre no puede ser un valor numerico"; 		}
			
			else{
				
			# Verificar si el usuario existe
			
			// echo $user;
			// echo $pass;
			
include("ConnectionBd.php");//connection_con_servidor
			
$sql = "SELECT `UserName`, `Email`, `Password` FROM `userregistrados` WHERE `UserName`='$user' OR `Email`='$user' AND `Password`='$pass'";		
$result = mysql_query($sql) or die('No pude ejecutar la consulta');


$sesion = mysql_fetch_array($result);

echo $sesion['UserName'];
echo $sesion['Password'];
echo $sesion;

// $DatosResult = mysql_fetch_array($result);

// echo $DatosResult['UserName'];
// echo $DatosResult['Password'];

// if($user == $DatosResult['UserName'] &&  $pass == $DatosResult['Password']  ||  $user == $DatosResult['Email']    &&  $pass == $DatosResult['Password']){


			 // echo"<h1><center>Registrado start-session</center></h1>";
				
		 // }
		 // else{
				
				// echo"<h1><center>No esta Registrado</center></h1>";
				
			
				// }
					
				

				}//cierre del else
		}


	}///cierre de sumit


	?>
