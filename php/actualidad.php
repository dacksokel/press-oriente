<?php
require("conectar.php");
$parte1=$_POST['parte'];
$parte2=$_POST['parte'];
if($parte1==1){

echo actualidad_parte1($conectar);
}
if($parte2==2){
echo actualidad_parte2($conectar);	
}
/*********************************************************************************************************
 * ************************************************************************************************************
 * ******************************************************************************************************/
function actualidad_parte1($conectar){
$arregloPrueba2=array();
$auxNoti="";
for($i=1;$i<=8;$i++){
	$auxNoti=$auxNoti.buscar_noticias_actualidad($conectar, $i);
	
}
return $auxNoti;
}
function actualidad_parte2($conectar){
$arregloPrueba2=array();
$auxNoti="";
for($i=9;$i<=16;$i++){
	$auxNoti=$auxNoti.buscar_noticias_actualidad($conectar, $i);
	
}
return $auxNoti;
}
/***********************************************************************************/


	
function buscar_noticias_actualidad($conectar,$i){
	$res_aqui="";	
	$selector=mysql_query('select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiasactualidad', $conectar)or die("error al conectarse a la tabla de actualidad ");
	while($sel=mysql_fetch_array($selector)){
		if($sel['publicar']=="si"&&$sel['posicion']==$i){
			if($i==1){
				$res_aqui='
				<a href="'.$sel['urllink'].'" class="enlaces_noticias">
				<article class="articulos-noticias-centro">
							<p class="horafecha"">'.$sel['fecha'].'</p>
							<header class="cabecera-noticias" id="p'.$sel['id'].'">'.$sel['titulo'].'</header>
							<div class="img-noticia"><img src="'.$sel['imagen'].'"></div>
							<p class="contenido-noticia">
									'.substr($sel['contenido'],0,200).'   ..<b>ver mas haz click en la Noticia</b>
							</p>
				</article>
				</a>
				<div class="publicidad-entrenoticias1"><a href="http://www.caballeroscuro.com/"><img src="img/publicidad/Caballeroscuro.jpg"></a></div>
				';
			
			}else{
				$res_aqui='
				<a href="'.$sel['urllink'].'" class="enlaces_noticias">
				<article class="articulos-noticias-centro">
							<p class="horafecha"">'.$sel['fecha'].'</p>
							<header class="cabecera-noticias" id="p'.$sel['id'].'">'.$sel['titulo'].'</header>
							<div class="img-noticia"><img src="'.$sel['imagen'].'"></div>
							<p class="contenido-noticia">
									'.substr($sel['contenido'],0,200).'   ..<b>ver mas haz click en la Noticia</b>
							</p>
				</article>
				</a>';
			}
			
			
		}
	}
	return $res_aqui;
}	
?>