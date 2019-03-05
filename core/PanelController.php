<?php

namespace Core;


use Core\PanelView as View;
use Core\CategoryModel as Category;
use Core\ArticleModel as Article;

class PanelController
{
    public $Model;
    public $View;
    public $Category;
    public $Article;


    public function __construct()
    {
        $this->Category = new Category('category');
        $this->View = new View();
        $this->Article = new Article('article');
    }

    public function dashboard()
    {
        //$this->Article->all();
        $this->View->dashboard('Статистика', $this->Article->out, '');
    }
    public function showArticleList()
    {
        $this->Article->all();
        $this->View->articleList('Список статей', $this->Article->out, '');
    }

    public function articleAdd()
    {
        $this->Category->findAll();

        $this->View->addArticle('Создать новую статью', '', $this->Category->out);
    }

    public function hell()
    {


        $this->View->hell('Создать новую статью', '', '');
    }

    public function articleAdd1()
    {
        $this->Article->articleAdd();

    }
}