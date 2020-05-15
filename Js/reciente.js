function reciente_inicio(){
	$.ajax({
			type:'POST',
			url:'php/reciente.php',
			data:{
				parte:1
			}
		}).done(function(respuesta){
				$("#asidereciente").html(respuesta);
				});
}
function reciente_inicio2(){
	$.ajax({
			type:'POST',
			url:'php/reciente.php',
			data:{
				parte:2
			}
		}).done(function(respuesta){
				$("#asidereciente2").html(respuesta);
				});
}



