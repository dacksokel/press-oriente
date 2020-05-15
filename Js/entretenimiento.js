function entretenimiento_inicio(){
	$("#entretenimiento-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_entretenimiento();
	reciente_inicio2();
	mostrar_noticias_entretenimiento2();
	completa_derecho();
}

function mostrar_noticias_entretenimiento(){
	$.ajax({
			type:'POST',
			url:'php/entretenimiento.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}
function mostrar_noticias_entretenimiento2(){
	$.ajax({
			type:'POST',
			url:'php/entretenimiento.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}
$(document).ready(entretenimiento_inicio);
