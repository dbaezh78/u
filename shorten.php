<?php

// Validar la URL
if (!filter_var($_POST['long_url'], FILTER_VALIDATE_URL)) {
  die("La URL no es válida.");
}

// Generar un enlace acortado
$short_url = substr(md5($_POST['long_url']), 0, 8);

// Devolver el enlace acortado
echo $short_url;

?>
