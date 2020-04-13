<?php
class ArticleController{

    public function addForm()
    {
        require 'View/insert_form.php';
    }

    public function persistForm()
    {
        $article = new Article(null, $_POST['titre'], $_POST['contenu'], null);
        $articleManager = new ArticleManager();
        $articleManager->insert($article);
        header('Location: /correctionMVC/index.php?controller=default&action=home');
    }

    public function delete($id)
    {
        $articleManager = new ArticleManager();
        $articleManager->delete($id);
        header('Location: /correctionMVC/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->select($id);

        require 'View/update_form.php';
    }

    public function updateArticle($id)
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->select($id);
        $article = new Article($id, $_POST['titre'], $_POST['contenu'], $article->getDateCreation());
        $articleManager->update($article);

        header('Location: /correctionMVC/index.php?controller=default&action=home');
    }
}
