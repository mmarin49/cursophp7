<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

class Usuario{
    /**
     * @var string
     */
    public $id;
    /**
     * @var array
     */
    protected $array_usuarios;

    /**
     * Usuario constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id= $id;
        $this->array_usuarios=["iparra","mmarin","awilk"];
    }

    public function encontrar_usuario(int $id=null):string {
        return $this->array_usuarios[$id ?? $this->id];
    }
    public function getNombre():string {
        return $this->array_usuarios[$this->id];
    }
    public function recorrer_usuarios():string{
        $result ="";
        foreach ($this->array_usuarios as $usuario){
            $result .="<BR>{$usuario}";
        }
        return $result;
    }
    public function __toString() {
        return $this->getNombre();
    }
}

$usuario = new Usuario(2);
echo $usuario->encontrar_usuario(0);
echo "<BR>";
echo $usuario->getNombre();
echo "<BR>";
echo $usuario->recorrer_usuarios();
echo "<BR>";
echo $usuario;