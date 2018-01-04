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
        $user->setEmail("sergio@gmail.com");
        $user->setUsername("sergio");
        $user->setPassword("123456");
        $doctrine->em->persist($user);
        $doctrine->em->flush();
        echo "Se ha creado el usuario con id ". $user->getId();
    }

    public function find_all()
    {
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        $users = $doctrine->em->getRepository('Application\Models\Entities\User')->findAll();

        foreach($users as $user)
        {
            echo $this->_formatUser($user);
        }
    }

    public function find_one($id)
    {
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        //una altra forma de trobar l'usuari
        //$user = $doctrine->em->getRepository('Application\Models\Entities\User')->findOneBy(["id" =>$id]);
        $user = $doctrine->em->find('Application\Models\Entities\User', $id);
        if($user != null){
            echo $this->_formatUser($user);
        }
        else
        {
            echo "El usuario con id {$id} no existe.";
        }
    }

    public function update($id){
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        $user = $doctrine->em->find('Application\Models\Entities\User', $id);
        $user->setEmail("iparraupdated@gmail.com");
        $doctrine->em->persist($user);
        $doctrine->em->flush();
    }

    private function _formatUser($user)
    {
        return sprintf(
            "%s, %s, %s, %s <br>",
            $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getCreated()->format("d/m/Y")
        );
    }
}