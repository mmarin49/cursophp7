<?php
function hola():string {
    return "Hola a todos";
}

echo hola();
echo "<BR>";

$hola = function():string {
    return "Hola de variable";
};

echo $hola();

echo "<BR>";

function saluda(string $param):string {
    return "Hola, ".$param;
}

echo saluda("Liu");

function integer_division(... $ints): int{
    return intdiv($ints[0],$ints[1]);
}
echo "<BR>";
echo integer_division(10,4);

function recorrer_usuarios (... $usuarios): string{
    $result="";
    foreach ($usuarios as $usuario){
        $result.="<BR>".$usuario;
    }
    return $result;
}

echo recorrer_usuarios("usuario1","usuario2","usuario3","usuario4");

function recorrer_usuarios_list ($usuarios): string{
    $result="";
    foreach ($usuarios as $usuario){
        list ($id,$nombre, $apellido) = $usuario;
        $result.="<BR> {$id}, {$nombre}, {$apellido}";
    }
    return $result;
}

$complejo =[
    [1, "Israel", "Parra"],
    [2, "Manel", "Marín"],
    [3, "Marc", "Marín"],
    [4, "Víctor", "Marín"]
];
echo recorrer_usuarios_list($complejo);