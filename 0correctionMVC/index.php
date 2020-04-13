<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $articleController = new DefaultController();
        $articleController->home();
    }
    else if($_GET['controller'] === 'article' && $_GET['action'] === 'addForm'){
        $articleController = new ArticleController();
        $articleController->addForm();
    }
    else if($_GET['controller'] === 'article' && $_GET['action'] === 'addArticle'){
        $articleController = new ArticleController();
        $articleController->persistForm();
    }
    else if($_GET['controller'] === 'article' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'article' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'article' && $_GET['action'] === 'updateArticle' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->updateArticle($_GET['id']);
    }
    else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }


//http://localhost/prototype-mvc/index.php?controller=default&action=home to get in

?>