<?php
error_reporting(E_ALL);
ini_set('display_errors','1');


/**
 * Class Usuario
 */
class Usuario
{
    private $database;
    /**
     * usuario constructor.
     * @param $database
     */
    public function __construct($database)
    {
        $this->database=$database;
    }
    /**
     * @return string
     */
    public function select_usuarios():string
    {
        return $this->database->select();
    }

}


$usuario = new Usuario(
    new class
    {
        /**
         * @return string
         */
        public function select(): string {
            return "SELECT * FROM usuarios";
        }
    }
);

echo "<BR>";
echo $usuario->select_usuarios();