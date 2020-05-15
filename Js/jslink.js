function inicio_link(){
	banner1_link();
	banner2_link();
	banner3_link();
	banner4_link();
}
function banner1_link(){
	
	$.ajax({

			type:'POST',

			url:'../../php/banner1_link.php',

			data:{

			}

		}).done(function(respuesta){

				$("#p1").html(respuesta);
				});
}
function banner2_link(){
	$.ajax({

			type:'POST',

			url:'../../php/banner2_link.php',

			data:{

			}

		}).done(function(respuesta){

				$("#p2").html(respuesta);

				});
}
function banner3_link(){
	$.ajax({

			type:'POST',

			url:'../../php/banner3_link.php',

			data:{

			}

		}).done(function(respuesta){

				$("#paside1").html(respuesta);

				});
}
function banner4_link(){
	$.ajax({

			type:'POST',

			url:'../../php/banner4_link.php',

			data:{

			}

		}).done(function(respuesta){

				$("#paside2").html(respuesta);

				});
}

$(document).ready(inicio_link);