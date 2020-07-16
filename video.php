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
	</style>
</head>

<?php

function VideosMostrar(){
	 $rutavideo = $_REQUEST['info'];

 echo $rutavideo;
	 }
?>


<body class="BodyClass">

<div id="Container" class="ContainerClase">



<main class="MainClase" > 

	<section class="Contenidos_Datos">

			<div class="VideoSelect">			
				<video width="100%" height="100%" controls>
					<source src="asset/video/<?php VideosMostrar(); ?>" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
	</section>

</main>

</div>




</body>

</html>