<?php
$a=2;
$b="2";
if ($b>$a){
    echo "b es mayor que a";
}

if ($a ===$b){
    echo "a y b són exactammente iguales";
}
else{
    echo "a y b no son exactamente iguales";
}

echo "<br>";
$nombre ="Juan";
$usuario = $nombre ?? "Andrés";
echo $usuario;

echo "<br>";
$nombre =null;
$usuario = $nombre ?? "Andrés";
echo $usuario;

$mes = 50;
echo "<br>";
switch ($mes){
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviembre";
        break;
    case 12:
        echo "Diciembre";
        break;
    default:
        echo"El mes no está bien introducido";
        break;
}