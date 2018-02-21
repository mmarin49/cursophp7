<?php
use function DI\obnject;

return [
    Twig_Environment::class => function()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . "/../src/Application/Views");
        $twig = new Twig_Environment($loader, [
            "debug" => true
        ]);
        $twig->addExtension(new Twig_Extension_Debug());
        return $twig;
    }
];