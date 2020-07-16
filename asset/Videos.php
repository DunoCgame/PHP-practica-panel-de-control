<?php

	$Nimg=0;

function Videos(){

$url='C:\xampp\htdocs\Control-Ingreso\asset\video';
	
	#pinta las imagenes
	
	 if(is_dir($url)){
  if($dh = opendir($url)){
	    $ignore = array( 'cgi-bin', '.', '..','._' );
    while (($file = readdir($dh)) !== false){
		if (!in_array($file,$ignore) and substr($file, 0, 1) != '.'){
      // echo "filename:" . $file . "<br>"; <h2 class="titulo"><a href="asset/VideoSelect.php?info='.$file.'">' .$file .'</a></h2>	
	  
	  $Nimg++;

	  echo '
	  <div class="contenedor_img">
			<img class="img" src="asset/img/' . $Nimg .'.jpg">
				<div class="contenido_text">
			<h2 class="titulo"><a href="video.php?info='.$file.'">' .$file .'</a></h2>	
					
				</div>
	  </div>
	  
	  ';
	  
		}
    }
    closedir($dh);
  }
}

	
	
	
	
	
	
}






?>