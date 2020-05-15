<?php
require("conectar.php");
$countador=0;
$respuesta="";
$selector=mysql_query('select foto,titulo from noticiasfotodia', $conectar)or die("error al conectarse a la tabla de deporte ");
while($sel=mysql_fetch_array($selector)){
		
		$respuesta='
		
									
					<img id="imgdiadiagrande" src="'.$sel['foto'].'">					<p id="tituloimagengrande">'.$sel['titulo'].'</p>
								
			';
	}

echo $respuesta;
?>