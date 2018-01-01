<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Application\Services\Doctrine;

require_once __DIR__ . "/app/bootstrap.php";
$entityManager = $container->get(Doctrine::class)->em;
/** @var TYPE_NAME $entityManager */
return ConsoleRunner::createHelperSet($entityManager);