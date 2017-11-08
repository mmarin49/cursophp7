<?php
abstract class Abstracta
{
    abstract public function nombre(string $nombre):string;
    public function apellido(string $apellido):string
    {
        return $apellido;
    }
}
class Usuario extends Abstracta
{
    public function nombre(string $nombre): string
    {
        return $nombre ?? "mmarin";
    }
}
$usuario= new Usuario();
echo $usuario->nombre("Manel");
echo "<br>";
echo $usuario->apellido("Marín");