<?php
$nombre = filter_var($_GET ["nombre"],FILTER_SANITIZE_STRING);
echo $nombre;
echo "<BR>";

$apellido = $nombre = filter_var($_GET ["apellido"],FILTER_SANITIZE_STRING);
echo $apellido;
echo "<BR>";

var_dump($_GET);