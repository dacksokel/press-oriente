<?php
require("conectar.php");

$res1='';
$res2='';
$res3='';
$res4='';
$res5='';
$res6='';
$res7='';
$res8='';

$res9='';
$res10='';
$res11='';
$res12='';
$res13='';
$res14='';
$respuesta='';
	$selector=mysqli_query($conectar, 'select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiasayer')or die("error al conectarse a base tabla ");
	while($sel=mysqli_fetch_array($selector)){
			
		if($sel['publicar']=="si"){
			
			if($sel['posicion']==1){
				$res1='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'....
								</h2>
							</header>
							
							
						</article></a>
				';
			}
			if($sel['posicion']==2){
				$res2='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
							
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'......
								</h2>
							</header>
							
							
						</article></a>
				';
			}
			if($sel['posicion']==3){
				$res3='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
							
						</article></a>
				
				';
			}
			if($sel['posicion']==4){
				$res4='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
							
						</article></a>
				
				';
			}
			if($sel['posicion']==5){
				$res5='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
						
						</article></a>
				
				';
			}
			if($sel['posicion']==6){
				$res6='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
							
						</article></a>
				
				';
			}
			if($sel['posicion']==7){
				$res7='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
								<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						</article></a>
				';
			}
			if($sel['posicion']==8){
				$res8='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
							<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						
						</article></a>
				
				';
			}
		if($sel['posicion']==9){
				$res9='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
							<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						</article></a>
				';
			}
			if($sel['posicion']==10){
				$res10='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
							<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						</article></a>
				';
			}
			if($sel['posicion']==11){
				$res11='
				<a href="'.$sel['urllink'].'">
			<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
							<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						</article></a>
				';
			}
			if($sel['posicion']==12){
				$res12='
				<a href="'.$sel['urllink'].'">
				<article class="articulos-noticias-centro-pagina3">
						
							<header class="cabecera-noticias-ayer" id="notayer'.$sel['id'].'">
							<img src="'.$sel['imagen'].'">
								<h2>
									'.substr($sel['titulo'],0,50).'...
								</h2>
							</header>
							
						</article></a>
				';
			}
			





		}

	}
	$respuesta=$res1." ".$res2." ".$res3." ".$res4." ".$res5." ".$res6." ".$res7." ".$res8.$res9.$res10.$res11.$res12.$res13.$res14;
	echo $respuesta;
?>