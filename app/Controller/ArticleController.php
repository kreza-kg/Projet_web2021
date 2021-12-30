<?php

namespace app\Controller;

use app\model\ModelArticle;

class ArticleController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelArticle();
    }

    public function FindOneArticle($id){
        $OneArticle=$this->model->GetOneArticle($id);
        include('app/view/Contenu/articleComplet.php');
    }

    public function GetAllArtCat($nom){
        $ReqArticles=$this->model->allArticlesSujet($nom);
        include('app/view/Contenu/Articles.php');
    }

    public function getAllArticles(){
        $ReqArticles=$this->model->FindNotTab();
        include('app/view/Contenu/articles.php');
    }

}