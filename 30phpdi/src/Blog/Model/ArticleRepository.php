<?php
namespace Blog\Model;

interface ArticleRepository
{
    public function getArticles();

    public function getArticle($id);
}