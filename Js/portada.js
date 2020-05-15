function portada_inicio(){
	$("#inicio-press-a").css("background","red");
	reciente_inicio();
	reciente_inicio2();
	mostrar_noticias_portada();
	mostrar_noticias_portada2();
	completa_derecho();
}

function mostrar_noticias_portada(){
	$.ajax({
			type:'POST',
			url:'php/portada.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}
function mostrar_noticias_portada2(){
	$.ajax({
			type:'POST',
			url:'php/portada.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}
$(document).ready(portada_inicio);
