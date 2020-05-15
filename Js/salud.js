function salud_inicio(){
	$("#salud-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_salud();
		reciente_inicio2();
	mostrar_noticias_salud2();
	completa_derecho();
	
}

function mostrar_noticias_salud(){
	$.ajax({
			type:'POST',
			url:'php/salud.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}

function mostrar_noticias_salud2(){
	$.ajax({
			type:'POST',
			url:'php/salud.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}

$(document).ready(salud_inicio);
