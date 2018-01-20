<?php
use function DI\object;

return [
    Twig_Environment::class => function()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . "/../src/Application/Views");
        return new Twig_Environment($loader);
    }
];