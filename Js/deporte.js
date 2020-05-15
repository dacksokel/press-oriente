function deporte_inicio(){
	$("#deporte-press-a").css("background","red");
	reciente_inicio();
	reciente_inicio2();
	mostrar_noticias_deporte();
	mostrar_noticias_deporte2();
	completa_derecho();
}

function mostrar_noticias_deporte(){
	$.ajax({
			type:'POST',
			url:'php/deporte.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}
function mostrar_noticias_deporte2(){
	$.ajax({
			type:'POST',
			url:'php/deporte.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}
$(document).ready(deporte_inicio);
