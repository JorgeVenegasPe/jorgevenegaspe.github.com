<?php

$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono =$_POST['Numero'];
$mensaje = $_POST['Mensaje'];

$destinario = "mariano.venegas.francia@gmail.com";
$asunto = "Contacto PagWeb";

$carta = "De: $nombre \n";
$carta .="Correo: $correo \n";
$carta .="Telefono: $telefono \n";
$carta .="Mensaje: $mensaje";

mail($destinario, $asunto, $carta);
header('Location:http://localhost/trabajofl/public/')
?>
