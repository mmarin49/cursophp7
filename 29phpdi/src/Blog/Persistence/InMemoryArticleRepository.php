<?php
namespace Blog\Persistence;
Use Blog\Model\ArticleRepository;
use Blog\Model\Article;

class InMemoryArticleRepository implements ArticleRepository
{
    private $articles;

    public function __construct()
    {
        $this->articles = [
            1 => new Article(1,"Article 1", "New article"),
            2 => new Article(2,"Article 2", "Other new article"),
        ];
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle($id)
    {
        return $this->articles($id);
    }


}

