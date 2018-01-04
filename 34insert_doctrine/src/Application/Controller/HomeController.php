<?php
namespace Application\Controller;

use DI\ContainerBuilder;
use Application\Services\Doctrine;
use Application\Models\Entities\User;

class HomeController
{
    public function index()
    {
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        print_r($doctrine);
    }

    public function insert()
    {
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        $user = $container->get(User::class );
        $user->setEmail("iparra@gmail.com");
        $user->setUsername("iparra");
        $user->setPassword("123456");
        $doctrine->em->persist($user);
        $doctrine->em->flush();
        echo "Se ha creado el usuario con id ". $user->getId();
    }
}