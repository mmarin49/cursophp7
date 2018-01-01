<?php
use function DI\object;
use Blog\Model\ArticleRepository;
use Blog\Persistence\InMemoryArticleRepository;
return [
    ArticleRepository::class=>object(InMemoryArticleRepository::class),
    Twig_Environment::class => function()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__."/../src/Blog/Views");
        return new Twig_Environment($loader);
    }
]; 