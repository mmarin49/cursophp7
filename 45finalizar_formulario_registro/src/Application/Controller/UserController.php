<?php
/**
 * Created by PhpStorm.
 * User: iparra
 * Date: 20/3/16
 * Time: 9:11
 */

namespace Application\Controller;

use Twig_Environment;
use DI\ContainerBuilder;
use Application\Services\Doctrine;
use Application\Models\Entities\User;

class UserController
{
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function login()
    {
        echo $this->twig->render("login.twig");
    }

    /**
     *
     */
    public function registro()
    {
        $errors = [];
        if(isset($_POST["submit"]))
        {
            if(empty($_POST["username"]))
            {
                $errors[]="El nombre de usuario es requerido";
            }
            if(empty($_POST["email"]))
            {
                $errors[]="El email es requerido";
            }
            if(empty($_POST["password"]))
            {
                $errors[]="El password es requerido";
            }
            if(empty($errors))
            {
                $username = filter_input(INPUT_POST, 'username');
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $password = filter_input(INPUT_POST, 'password');

                $container = ContainerBuilder::buildDevContainer();
                $doctrine = $container->get(Doctrine::class);
                $user = $container->get(User::class);
                $user -> setEmail($email);
                $user -> setUsername($username);
                $user ->setPassword($password);
                $doctrine->em->persist($user);
                $doctrine->em->flush();

                $_SESSION["username"]= $username;
                $_SESSION["email"]= $email;
                header("Location: http://localhost:9000/dashboard");
                exit;
            }
        }
        echo $this->twig->render("registro.twig",["errors"=>$errors, "post"=>$_POST]);
    }
}