function detrasdelaweb_inicio(){
	$("#detrasdelaweb-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_detrasdelaweb();
}

function mostrar_noticias_detrasdelaweb(){
	$.ajax({
			type:'POST',
			url:'php/detrasdelaweb.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}

$(document).ready(detrasdelaweb_inicio);
