<?php
	$destino = "juan311297@gmail.com";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$mail = $_POST["mail"];
	$mensaje = $_POST["mensaje"];
	$provincia = $_POST["provincia"];
	$contenido ="Nombre: " . $nombre ."\nApellido: " . $apellido ."\nCorreo: " . $mail ."\nMensaje: " . $mensaje . "\nProvincia: " . $provincia;
	mail($destino,"Pagina",$contenido);
	header("Location:../index.html");
	?>
