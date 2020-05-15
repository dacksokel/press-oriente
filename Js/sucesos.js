function sucesos_inicio(){
	$("#sucesos-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_sucesos();
		reciente_inicio2();
	mostrar_noticias_sucesos2();
	completa_derecho();
}

function mostrar_noticias_sucesos(){
	$.ajax({
			type:'POST',
			url:'php/sucesos.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}


function mostrar_noticias_sucesos2(){
	$.ajax({
			type:'POST',
			url:'php/sucesos.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}


$(document).ready(sucesos_inicio);
