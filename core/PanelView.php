<?php


namespace Core;
use Core\CoreView;


class PanelView extends  CoreView
{



    public function showLoginForm($title)
    {
        echo $this->twig->render('admin/login.php', ['title' => $title]);
    }


    public function dashboard($title, $articles, $category ,$lastArticles)
    {
        echo $this->twig->render('admin/dashboard.php', ['title' => $title,'articles'=>$articles, 'category'=>$category, 'lastArticles'=>$lastArticles] );
    }



    public function articleList($title, $articles, $category)
    {
        echo $this->twig->render('admin/article-list.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }

    public function addArticle($title, $articles, $category)
    {
        echo $this->twig->render('admin/article-form.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }

    public function editArticle($title, $articles, $category)
    {
        echo $this->twig->render('admin/edit-article.php', ['title' => $title,'articles'=>$articles, 'category'=>$category] );
    }



    public function categoryList($title, $category)
    {
        echo $this->twig->render('admin/cat-list.php', ['title' => $title,'category'=>$category]);
    }

    public function addCategory($title, $category)
    {
        echo $this->twig->render('admin/cat-form.php', ['title' => $title,'category'=>$category]);
    }

    public function editCategory($title, $category)
    {
        echo $this->twig->render('admin/edit-cat.php', ['title' => $title,'category'=>$category]);
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