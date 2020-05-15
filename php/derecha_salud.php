<?php
require("conectar.php");
$respuesta="";
for($i=1;$i<=5;$i++){
	$respuesta=$respuesta.mostrar_derecha($conectar, $i);
}

echo $respuesta;

function mostrar_derecha($conectar,$numerito){
$selector=mysqli_query($conectar, 'select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiassalud')or die("error al conectarse a la tabla de salud ");
$respuestadar="";
while($sel=mysqli_fetch_array($selector)){
		
		if($sel['publicar']=='si'&&$numerito==$sel['posicion']){
			
						$respuestadar='						
						<a href="'.$sel['urllink'].'">
								<div class="imagenderecha" id="derechasalud">
									<img src="'.$sel['imagen'].'">
								</div>
							<div class="minicontenidoderecha" id="mincontderecha">
								'.substr($sel['titulo'],0,100).'.....
							</div>
						</a>
						';
						break;
				}
		}

 return $respuestadar;
}
?>