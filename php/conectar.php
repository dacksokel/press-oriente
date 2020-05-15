<?php
$conectar = mysqli_connect("127.0.0.1", "pressori_root", "pressori31012014", "pressori_usu");
$conectar->set_charset("utf8");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}


 
?>
