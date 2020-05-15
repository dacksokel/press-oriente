<?php

require("conectar.php");

$respuesta="";

$selector=mysqli_query($conectar, 'select urllink,banner,tipo,activardesactiavr from publicidad')or die("error al conectarse a la tabla de deporte ");

while($sel=mysqli_fetch_array($selector)){

		if($sel['tipo']=="banner3"){
			$respuesta='
				<a href="'.$sel['urllink'].'">
					<img src="'.$sel['banner'].'"/>
				</a>
			';
		}

		

	}



echo $respuesta;

?>