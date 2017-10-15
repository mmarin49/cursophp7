<?php
$usuario ="mmarin";
echo $usuario;
$usuario ="Víctor";
echo "<BR>";
echo $usuario;
$edad ="34";
echo "<BR>";
echo $edad;
$ingresos = "12.45" ;
echo "<BR>";
echo $ingresos;
$lenguajes = [
    "PHP","javascript","python","ruby"
];
var_dump($lenguajes);
echo "<BR>";
echo $lenguajes[1];

$objeto = new class{};
$objeto->php = "php7";
echo "<BR>";
echo $objeto->php;
echo "<BR>";
var_dump($objeto);