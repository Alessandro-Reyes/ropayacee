<?php
if (isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $header = "from: admin@example.com" . "\r\n";
        $header.= "Reply-to: admin@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        mail($email, $asunto, $mensaje, $header);
            echo "<h4>!!Mensaje enviado correctamente!!</h4>";
        
    }
}
?>