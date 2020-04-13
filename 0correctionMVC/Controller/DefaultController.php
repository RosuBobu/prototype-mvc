<?php
class DefaultController{

    public function home()
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();
        require 'View/home_view.php';
    }
}