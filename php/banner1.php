<?php

require("conectar.php");

$respuesta="";

$selector = mysqli_query($conectar, 'SELECT urllink,banner,tipo,activardesactiavr FROM publicidad')or die("error al conectarse a la tabla de publicidad ");

while( $sel = mysqli_fetch_array($selector) ){

		if($sel['tipo']=="banner1"){
			$respuesta='
				<a href="'.$sel['urllink'].'">
					<img src="'.$sel['banner'].'"/>
				</a>
			';
		}

		

	}



echo $respuesta;

?>