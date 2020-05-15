function zonapress_inicio(){
	$("#zonapress-press-a").css("background","red");
	reciente_inicio();
	mostrar_noticias_zonapress();
	reciente_inicio2();
	mostrar_noticias_zonapress2();
	completa_derecho();
}

function mostrar_noticias_zonapress(){
	$.ajax({
			type:'POST',
			url:'php/zonapress.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#noticiasC1").html(respuesta);
				});
}


function mostrar_noticias_zonapress2(){
	$.ajax({
			type:'POST',
			url:'php/zonapress.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#noticiasC2").html(respuesta);
				});
}
$(document).ready(zonapress_inicio);
