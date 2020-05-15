<?php
/*CON ESTA LINEA DE CODIGO SE TIENE ACCESO DESDE OTRO DOMINIO PARA CREAR LOS ARCHIVOS DE LAS NOTICIAS*/header('Access-Control-Allow-Origin: http://panelcontrol.press-oriente.com');//header('Access-Control-Allow-Origin: http://localhost/pressorientepanelv3');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
/*FIN DEL CODIGO DE ACCESO */
$filenombre=$_FILES["imagen"]["name"];
$archivoTemp=$_FILES["imagen"]["tmp_name"];
$tipoarchivo=$_FILES["imagen"]["type"];
$tamañoarchivo=$_FILES["imagen"]["size"];
	
	if(!$archivoTemp){
		echo "error al cargar el archivo vuelva a intentar o  revice que no tenga 5MB";
		exit();
	}
	if(move_uploaded_file($archivoTemp,"../img/publicidad/$filenombre")){
		echo 'Se Guardo Exitosamente la Imagen';
	}else{
		echo "move_uploader_file a fallado";
		}
	

/*

*/
?>