<?php
require("conectar.php");
$countador=0;
$respuesta="";
$selector=mysqli_query($conectar, 'select foto,titulo from noticiasfotodia')or die("error al conectarse a la tabla de deporte ");
while($sel=mysqli_fetch_array($selector)){
		
		$respuesta='
		
				<div id="derechafotodia">
					<img id="imgdiadia" src="'.$sel['foto'].'">					<p id="tituloimagenderecha">'.$sel['titulo'].'</p>
				</div>				
			';
	}

echo $respuesta;
?>