<?php

function Validacion_Formulario(){
	
	if(isset($_POST['register'])){
		
					$name=$_POST['Name'];
					$user=$_POST['User'];
					$email=$_POST['Email'];
					$pass=$_POST['pass'];
					$Rpass=$_POST['Rpass'];

					if($name==NULL){
						echo "<p>El campo Name esta vacio</p>";
					}
					if($user==NULL){
						echo "<p>El campo User esta vacio</p>";
					}

					if($email==NULL){
						echo "<p>El campo Email esta vacio</p>";
					}
					if($pass==NULL){
						echo "<p>El campo passwrd esta vacio</p>";
					}
					if($Rpass==NULL){
						echo "<p>El campo Rpasswrd esta vacio</p>";
					}
					if( $Rpass!=$pass){
						echo "<p>La clave no coinciden</p>";
					}					
			if($name!=NULL && $user!=NULL && $email!=NULL && $pass!=NULL  && $Rpass!=NULL && $Rpass==$pass){
						if(is_numeric($user)){
							echo "Tu user no puede ser un valor numerico";
						}
						if(is_numeric($name)){
							echo "Tu nombre no puede ser un valor numerico";
						}
						else{
							//Mandar datos a MYSQL						
				Verificar_Datos($name,$user,$email,$pass);
				// Guardar_Datos_DB($name,$user,$email,$pass); http://www-eng.lbl.gov/~shuman/NEXT/CURRENT_DESIGN/TP/MATERIALS/IPC-2221A(L).pdf
					}
			}
		
	
		}
		}
Validacion_Formulario();


function Verificar_Datos($_name,$_user,$_email,$_pass){
	
	include("ConnectionBd.php");
	
	if(	isset($_name)  && !empty($_name)  && 	isset($_user)  && !empty($_user) &&
		isset($_email) && !empty($_email) &&	isset($_pass)  && !empty($_pass) ){

$sql = "SELECT `UserName`,`Email`, `Password` FROM `userregistrados` WHERE `UserName`='$_user' OR `Email`='$_user' AND `Password`='$_pass'";		
		
$result = mysql_query($sql) or die('No pude ejecutar la consulta');
	
$DatosObtenidos = mysql_fetch_array($result);	

		
   if(
	   $_user!=$DatosObtenidos['UserName'] &&
	   $_pass!=$DatosObtenidos['Password'] &&
	   $_email!=$DatosObtenidos['Email'] 
	){
	
				Guardar_Datos_DB($_name,$_user,$_email,$_pass);
			}
			else{
				echo '<h1>El Nombre de Usuario, la Clave y Email ya esta Registrados<h1>';
			}

		}//cierre del if
	
	
						
		
	
}


function Guardar_Datos_DB($_name,$_user,$_email,$_pass){
	
	
	include("ConnectionBd.php");
							
if(
	isset($_name)  && !empty($_name)  && 
	isset($_user)  && !empty($_user)  &&
	isset($_email) && !empty($_email) &&
	isset($_pass)  && !empty($_pass) ){

$sql = "INSERT INTO userregistrados (Name, UserName, Email, Password) VALUES ('$_name','$_user','$_email','$_pass')";
					
 $result = mysql_query($sql) or die('No pude ejecutar la consulta');
session_start();
 
 $_SESSION['username'] = $_user;

		 echo "<h1><center>Usuario Registrado</center></h1>";
				// header('Location:../user.php');	
				header('Location:../Saludo_Registro.html');	
			}
	
	

	 mysql_close($conn);
			
}


	?>
	

