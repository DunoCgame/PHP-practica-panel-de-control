<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<link rel="shortcut icon" href="Img/logo.png" >
	<link rel="stylesheet" href="asset/css/user.css"> 
	<title>cine Online</title>
	<style>
	.contenedor_img{
		background:grey;	
		width:200px;
		height:180px;
		
		padding:2px;
		
		border-radius: 0px 0px 20px 20px;
		border: 0px solid #000000;
		margin:10px;
	}
	
	.img{
		width:200px;
		height:150px;
		}
		
		
	.titulo{
		color:white;
		text-align:center;
		font-size:13px;
		margin-top:10px;
	}
	a{
		text-decoration:none;
	color:white;
		
	}
	</style>
</head>

<?php include("asset/Videos.php");?>
<?php include("asset/Sessionuser.php");?>


<body class="BodyClass">

<div id="Container" class="ContainerClase">

<header class="HeaderClase ">
		<nav class="NavClase " id="Menucontenedor">
		
			<a class="NavClase__logo" href="#">
				<img class="NavClase__logo__img"src="asset/img/Logo.png" width="60" height="60" alt="">		
			</a>
			
			<ul class="NavClase_ItenMenu" id="MenuId" >
			
				<li class="NavClase_item fecha"><label id="relog" class="relog"></label></li>
				<li class="NavClase_item Webmaster"><h3 style="color:white;"><?php MostrarData(); ?></h3></li>
				<li class="NavClase_item exit "><a class="NavClase_link " href="asset/CloseSession.php">exit</a> </li>
				
			</ul>

		</nav>
</header>

<main class="MainClase" > 

	<section class="Contenidos_Datos">

				<div class="DatosUsuarios">			
								<?php Videos(); ?>
				</div>
	</section>

</main>

<footer class="FooterClase"  >Cine-Online CopyRight</footer>

</div>



<script src="asset/js/relog.js"></script>


</body>

</html>