<?php
require("conectar.php");
$parte1=$_POST['parte'];
$parte2=$_POST['parte'];

if($parte1==1){
	echo reciente_parte1($conectar);
}
if($parte2==2){	
	echo reciente_parte2($conectar);
}
/***************************************************************************************************/
function reciente_parte1($conectar){
$auxR="";
$arregloPrueba=array();
for($i=1;$i<18;$i++){
	$auxR=$auxR.buscar_noticias_reciente($conectar, $i);

}

	return $auxR;
}

function reciente_parte2($conectar){
$auxR="";
$arregloPrueba=array();
for($i=18;$i<38;$i++){
	$auxR=$auxR.buscar_noticias_reciente($conectar, $i);

}

	return $auxR;
}

function buscar_noticias_reciente($conectar,$i){
	$respuesta_prueba="";
$selector=mysqli_query($conectar, 'select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiasreciente' )or die("error al conectarse a base tabla 1");
	
		while($sel=mysqli_fetch_array($selector)){
			if($sel['posicion']==$i&&$sel['publicar']=="si"){
				$respuesta_prueba='								
				<a href="'.$sel['urllink'].'" class="enlaces-recientes">
				<article class="articulos-lado-izquierdo" id="notrecien'.$sel['id'].'">
				<div class="img-articulos-lado-izquierdo"><img src="'.$sel['imagen'].'"></div>
				<p class="titulo-articulos-lado-izquierdo" id="notrecien'.$sel['id'].'">'.substr($sel['contenido'],0,80).'...</p>
				</article></a>
				';
			}
			
		}
	return $respuesta_prueba;
}	
?>