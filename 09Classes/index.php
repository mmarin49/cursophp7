<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
/**
 * Class Database
 */
class Database
{
    public $database_name="pruebas";
    /**
     * Database constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function select(): string {
        return "SELECT * FROM usuarios";
    }
}

/**
 * Class Usuario
 */
class Usuario
{
    private $database;
    /**
     * usuario constructor.
     * @param Database $database
     */
    public function __construct(Database $database)
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

    public function __toString()
    {
        return serialize($this->database);
    }
}

$db = new Database();
$usuario = new Usuario($db);
echo $usuario;
echo "<BR>";
echo $usuario->select_usuarios();