<?php

$destinario = 'fernandovalerio269@gmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];


$header = "Enviado desde la página Angel's Garden";
$mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre; 

mail($destinario, $comentario, $mensajeCompleto, $header);

?>