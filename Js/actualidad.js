function actualidad_inicio(){
	$("#actualidad-press-a").css("background","red");
	reciente_inicio();
	reciente_inicio2();
	mostrar_noticias_actualidad();
	mostrar_noticias_actualidad2();
	completa_derecho();
}

function mostrar_noticias_actualidad(){
	$.ajax({
			type:'POST',
			url:'php/actualidad.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}
function mostrar_noticias_actualidad2(){
	$.ajax({
			type:'POST',
			url:'php/actualidad.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}

$(document).ready(actualidad_inicio);
