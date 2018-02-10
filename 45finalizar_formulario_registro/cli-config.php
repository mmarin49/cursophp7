<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Application\Services\Doctrine;

require_once __DIR__ . "/app/bootstrap.php";
$entityManager = $container->get(Doctrine::class)->em;
return ConsoleRunner::createHelperSet($entityManager);