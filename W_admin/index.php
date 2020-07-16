<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<link rel="shortcut icon" href="../asset/Img/logo.png" >

	<link rel="stylesheet" href="../asset/css/webmaster.css"> 

	<title>cine Online</title>
</head>

<body class="BodyClass">

<div id="Container" class="ContainerClase">

<header class="HeaderClase ">

<?php
 
 include ("asset/webmaster.php");
?>

		 <nav class="NavClase " id="Menucontenedor">
		
			<a class="NavClase__logo" href="#">
				<img class="NavClase__logo__img"src="../asset/img/Logo.png" width="60" height="60" alt="">		
			</a>
			
			<ul class="NavClase_ItenMenu" id="MenuId" >
				<li class="NavClase_item fecha">
					<label id="relog" class="relog"></label>
				</li>
		<li class="NavClase_item Webmaster"><h3 style="color:white; font-size:25px;"><?php DatosWebMaster(); ?></h3></li>
				<li class="NavClase_item exit "><a class="NavClase_link " href="#">exit</a> </li>
				
			</ul>

		</nav>



</header>
<main class="MainClase" > 

<section class="Contenidos_Datos">
<div class="DatosUsuarios">
<center>
	<label style="color:white; font-size:20px;">Nº User Registrados</label>

	<label style="color:white; font-size:25px;"><?php UsuariosRegistrados(); ?></label>
	<br>
</center>
</div>
 <div class="Informacion">
<center>
<form method="POST" action="asset/BorrarUser.php" id="formRegister" class="formRegisterClass"> 

<label class="User" style="color:white; font-size:25px;">Borrar:</label>

<input class="input_login" type="text" placeholder="User" name="user">

<button  name="Borrar">Borrar</button>
</form>
<br>
<hr>
<br>

<form method="POST" action="asset/BuscarUser.php" id="formRegister" class="formRegisterClass"> 
<label style="color:white; font-size:25px;">Buscar-Usuario:</label>
<input class="input_login" type="text" placeholder="User" name="user">
<button name="Buscar">Buscar_Usuario</button>
</form>

</center>

</form>
</div>


</section>

</main>



<footer class="FooterClase">Cine-Online CopyRight</footer>

<script languaje="JavaScript" src="../asset/js/relog.js"></script>
</div>





</body>

</html>