<?php

// Recibir la URL original del usuario
$url_original = $_POST["url"];

// Generar una URL acortada
$url_acortada = substr(md5($url_original), 0, 6);

// Almacenar la URL original y la URL acortada en la base de datos
$db = new PDO("mysql:host=localhost;dbname=acortador_de_url", "root", "");
$query = $db->prepare("INSERT INTO urls (url_original, url_acortada) VALUES (?, ?)");
$query->execute(array($url_original, $url_acortada));

// Redirigir al usuario a la URL original
header("Location: $url_original");

?>  
