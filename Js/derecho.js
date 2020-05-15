function derecho_busqueda(tipo){
	$.ajax({
			type:'POST',
			url:'php/derecha_'+tipo+'.php',
			data:{
			}
		}).done(function(respuesta){
				$("#contenido_derecha_"+tipo).html(respuesta);
				});
}
function llamadodetodos(){
	var asidesderechos=["deporte","salud","economia","sociales","politica","nacionales","internacionales","fotodia","gastronomia","musica","cine","farandula"];
	for(var i=0;i<asidesderechos.length;i++){
		derecho_busqueda(asidesderechos[i]);
	}
}

function ayer_caleta_aqui(){
		$.ajax({
			type:'POST',
			url:'php/ayer.php',
			data:{
			}
		}).done(function(respuesta){
				$("#noticias-ayer-pagina3").html(respuesta);
				});
}function publicidad(){	banner1();	banner2();	banner3();	banner4();	banner5();	banner6();	banner7();	banner8();	banner9();	banner11();	banner10();}function banner1(){	$.ajax({			type:'POST',			url:'php/banner1.php',			data:{			}		}).done(function(respuesta){				$("#p1").html(respuesta);				});}function banner2(){	$.ajax({			type:'POST',			url:'php/banner2.php',			data:{			}		}).done(function(respuesta){				$("#p2").html(respuesta);				});}function banner3(){	$.ajax({			type:'POST',			url:'php/banner3.php',			data:{			}		}).done(function(respuesta){				$("#paside1").html(respuesta);				});}function banner4(){	$.ajax({			type:'POST',			url:'php/banner4.php',			data:{			}		}).done(function(respuesta){				$("#paside2").html(respuesta);				});}function banner5(){	$.ajax({			type:'POST',			url:'php/banner5.php',			data:{			}		}).done(function(respuesta){				$("#pcentro").html(respuesta);				});}function banner6(){	$.ajax({			type:'POST',			url:'php/banner6.php',			data:{			}		}).done(function(respuesta){				$("#aeropublicidad_contenido").html(respuesta);				});}function banner7(){	$.ajax({			type:'POST',			url:'php/banner7.php',			data:{			}		}).done(function(respuesta){				$("#p3").html(respuesta);				});}function banner8(){	$.ajax({			type:'POST',			url:'php/banner8.php',			data:{			}		}).done(function(respuesta){				$("#paside4").html(respuesta);				});}function banner9(){	$.ajax({			type:'POST',			url:'php/banner9.php',			data:{			}		}).done(function(respuesta){				$("#paside3").html(respuesta);				});}function banner10(){	$.ajax({			type:'POST',			url:'php/banner10.php',			data:{			}		}).done(function(respuesta){				$("#paside5").html(respuesta);				});}function banner11(){	$.ajax({			type:'POST',			url:'php/banner11.php',			data:{			}		}).done(function(respuesta){				$("#paside6").html(respuesta);				});}function fotodia_grande(){	$.ajax({			type:'POST',			url:'php/fotodiagrande.php',			data:{			}		}).done(function(respuesta){			$("#aerofotodia_contenido").html(respuesta);			$("#aerofotodia_base").css("display","block");				});}
function completa_derecho(){
	ayer_caleta_aqui();	$("#fotodiaaside").click(fotodia_grande);	$("#cerrarareofotodia").click(function(){		$("#aerofotodia_base").css("display","none");	});
	llamadodetodos();	publicidad();
}
