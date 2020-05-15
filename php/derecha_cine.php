<?php
require("conectar.php");
$countador=0;
$respuesta="";
$selector=mysqli_query($conectar, 'select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiascine')or die("error al conectarse a la tabla de deporte ");
while($sel=mysqli_fetch_array($selector)){
		
		if($sel['publicar']=='si'){
			$countador++;
			$respuesta=$respuesta.'
			<a href="'.$sel['urllink'].'">				
				<div class="imagenderecha" id="derechacine">
					<img src="'.$sel['imagen'].'">
				</div>
				<div class="minicontenidoderecha" id="mincontderecha">
					'.substr($sel['titulo'],0,100).'.....
				</div>
				
				</a>
			';
		}
		if($countador==5){
			break;
		}
	}

echo $respuesta;
?>