function internacional_inicio(){
	$("#internacional-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_internacional();
	reciente_inicio2();
	mostrar_noticias_internacional2();
	completa_derecho();
}

function mostrar_noticias_internacional(){
	$.ajax({
			type:'POST',
			url:'php/internacional.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}

function mostrar_noticias_internacional2(){
	$.ajax({
			type:'POST',
			url:'php/internacional.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}
$(document).ready(internacional_inicio);
