<?php

trait Session
{
    public function login(): string
    {
        return "Hola estás logeado";
    }
}

class User
{
    use Session;
}

$user= new User();
echo $user->login();

trait One
{
    public function className(): string
    {
        return __CLASS__." desde trait One";
    }
}

trait Two
{
    public function hello(): string
    {
        return __CLASS__." desde trait Two";
    }
}

class Multiple
{
    use One,Two;
}

$multiple= new Multiple();
echo "<BR>";
echo $multiple->className();
echo "<BR>";
echo $multiple->hello();
