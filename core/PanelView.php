<?php


namespace Core;
use Core\CoreView;


class PanelView extends  CoreView
{
    public function dashboard($title, $articles, $category)
    {
        echo $this->twig->render('admin/dashboard.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }
    public function articleList($title, $articles, $category)
    {
        echo $this->twig->render('admin/article-list.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }

    public function addArticle($title, $articles, $category)
    {
        echo $this->twig->render('admin/article-form.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }

    public function editor($title, $articles, $category)
    {
        echo $this->twig->render('admin/editor.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }

    public function hell($title, $articles, $category)
    {
        echo $this->twig->render('dashboard/editor.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }
    public function single($articles)
    {
        echo $this->twig->render('blog/single.php', ['title' => 'Blog Home  WOW25','articles'=>$articles] );
    }
}