<?php

require("conectar.php");

$respuesta="";

$selector=mysql_query('select urllink,banner,tipo,activardesactiavr from publicidad', $conectar)or die("error al conectarse a la tabla de deporte ");

while($sel=mysql_fetch_array($selector)){

		if($sel['tipo']=="banner4"){
			$respuesta='
				<a href="'.$sel['urllink'].'">
					<img src="../../'.$sel['banner'].'"/>
				</a>
			';
		}

		

	}



echo $respuesta;

?>