<?php
namespace Application\Controller;

use DI\ContainerBuilder;
use Application\Services\Doctrine;

class HomeController
{
    public function index()
    {
        $container = ContainerBuilder::buildDevContainer();
        $doctrine = $container->get(Doctrine::class);
        print_r($doctrine);
    }

    public function phpinfo()
    {
        phpinfo();
    }
}