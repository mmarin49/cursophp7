<?php
/**
 * Created by PhpStorm.
 * User: iparra
 * Date: 19/3/16
 * Time: 18:14
 */

namespace Application\Services;

use DI\ContainerBuilder;
use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache;

class Doctrine
{

    public $em = null;

    public function __construct()
    {
        $entitiesClass = new ClassLoader('Application\Models\Entities', rtrim(__DIR__ . "/../Models"));
        $entitiesClass->register();

        $repositoriesClass = new ClassLoader('Application\Models\Repositories', rtrim(__DIR__ . "/../Models/Repositories"));
        $repositoriesClass->register();

        $proxiesClass = new ClassLoader('Application\Models\Entities', rtrim(__DIR__ . "/../Models/Proxies"));
        $proxiesClass->register();

        // Configuración y chaché
        $config = new Configuration;
        $cache = new ArrayCache;
        $config->setMetadataCacheImpl($cache);
        $driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__ . '/../Models/Entities'));
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        $config->setProxyDir(__DIR__ . '/../Models/Proxies');
        $config->setProxyNamespace('Application\Models\Proxies');

        $connectionOptions = [
            "driver"        =>      "pdo_mysql",
            "user"          =>      "root",
            "password"      =>      "root",
            "dbname"        =>      "doctrinedb"
        ];

        $this->em = EntityManager::create($connectionOptions, $config);
    }
}