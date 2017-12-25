<?php
interface CrudModeInterface
{
    public function get(): string;
    public function find(int $id): string;
    public function create(array  $obj): string;
    public function update(array $obj): string;
    public function delete(int $id): string;

}

class Usuario implements CrudModeInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return "obtener usuario";
    }

    public function find(int $id): string
    {
        // TODO: Implement find() method.
        return "obtener el usuarios {$id}";
    }

    public function create(array $obj): string
    {
        // TODO: Implement create() method.
        return serialize($obj);
    }

    public function update(array $obj): string
    {
        // TODO: Implement update() method.
        return serialize($obj);
    }

    public function delete(int $id): string
    {
        // TODO: Implement delete() method.
        return "eliminar el usuario {$id}";
    }

    public function __toString()
    {
        return serialize(Usuario::get());
    }

}
$usuario= new Usuario;
echo $usuario->get();
echo "<BR>";

echo $usuario->find(1);
echo "<BR>";

echo $usuario->create(["mmarin",43]);
echo "<BR>";

echo $usuario->update([1,"mmarin",43]);
echo "<BR>";

echo $usuario->delete(2);
echo "<BR>";

echo $usuario->__toString();
echo "<BR>";