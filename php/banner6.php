<?php

require("conectar.php");

$respuesta="";

$selector=mysql_query('select urllink,banner,tipo,activardesactiavr from publicidad', $conectar)or die("error al conectarse a la tabla de deporte ");

while($sel=mysql_fetch_array($selector)){

		if($sel['tipo']=="banner6"){
			$activosino="";
			if($sel['activardesactiavr']=="activo"){
				$activosino="block";
			}
			if($sel['activardesactiavr']=="desactivar"){
				$activosino="none";
			}
			$respuesta='
			<style>
				#tiempobanner6{
					width:50%;
					margin: 0 auto;
					padding:0.25em;
					text-aling:center;
				}
			</style>
			<script>
				function tiempo(){
					$("#aeropublicidad_base").css("display","'.$activosino.'");
					var count=10;
					var numeros=setInterval(function(){
						count--;
						$("#tiempobanner6").text("Esta Pulicidad se cerrara en "+count);
						if(count==0){
							detener(numeros);
						}
					},1000)
					
				}
				function detener(x){
					clearInterval(x);
					$("#aeropublicidad_base").css("display","none");
				}
				tiempo();
			</script>
				<a href="'.$sel['urllink'].'">
					<img src="'.$sel['banner'].'"/>
					
				</a>
				<div id="tiempobanner6">
				</div>
			';
		}

		

	}



echo $respuesta;

?>