<?php
/**
 * Created by PhpStorm.
 * User: iparra
 * Date: 19/3/16
 * Time: 18:14
 */

namespace Application\Services;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Doctrine{
    public $em;

    public function __construct()
    {
        $paths = [
            __DIR__.'../Models/Entities',
            __DIR__.'../Models/Repositories'
        ];

        $devMode = true;

        $connectionOptions = [
            'driver' =>'pdo_mysql',
            'user' =>'root',
            'password' =>'',
            'dbname' =>'doctrinedb',
            'host' =>'127.0.0.1'
        ];
        $config=Setup::createAnnotationMetadataConfiguration($paths,$devMode);
        $this->em = EntityManager::create($connectionOptions, $config);
    }
}