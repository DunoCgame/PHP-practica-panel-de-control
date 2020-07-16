<?php

function Login(){
	///validar formulario
	if(isset($_POST['sumit'])){
		
$user=$_POST['user'];
$pass=$_POST['pass'];	

					if($user==NULL){
						echo "<p>El campo user esta vacio</p>";
					}
					if($pass==NULL){
						echo "<p>El campo passwrd esta vacio</p>";
					}

					if($user!=NULL && $pass!=NULL){
						if(is_numeric($user)){
							echo "Tu nombre no puede ser un valor numerico";
						}
						else{
							//Mandar datos a MYSQL
							
							IniciarSeccion($user,$pass);
							
							
						}
					}
			}
		
	
}
 Login();


function IniciarSeccion($_user,$_pass){
	

	session_start();
	
if( isset($_user)  && !empty($_user)  && isset($_pass)  && !empty($_pass) ){
	
		
	include("ConnectionBd.php");
	
	
# Preparo la sentencia SQL
$sql = "SELECT `UserName`,`Email`, `Password` FROM `userregistrados` WHERE `UserName`='$_user' OR `Email`='$_user' AND `Password`='$_pass'";		
$result = mysql_query($sql) or die('No pude ejecutar la consulta');
$Data_Extraida = mysql_fetch_array($result);


// echo $Data_Extraida['UserName'];
// echo $Data_Extraida['Password'];
mysql_free_result($result);

mysql_close($conn);



if($_user == $Data_Extraida['UserName'] &&  $_pass == $Data_Extraida['Password'] || 
   $_user == $Data_Extraida['Email'] &&  $_pass == $Data_Extraida['Password']){

				$_SESSION['username'] = $Data_Extraida['UserName'];
		
		header('Location:../user.php');					
			
		}
		else{
			echo"<h1><center>Hubo un error o No esta registrado</center></h1>";
			
		
			}
	
	
	
	
	
	
}


}





?>