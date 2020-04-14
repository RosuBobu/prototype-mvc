<?php
class QuestController{

    public function addForm(){
        require 'view/insert_form.php';
    }

    public function persistForm(){
        $quest = new Quest(null, $_POST['title'], $_POST['content'], null);
        $questManager = new QuestManager();
        $questManager->insert($quest);
        header('Location: /prototype-mvc/index.php?controller=default&action=home');
    }

    public function delete($id){
        $questManager = new QuestManager();
        $questManager->delete($id);
        header('Location: /prototype-mvc/index.php?controller=default&action=home');
    }

    public function updateForm($id){
        // echo('the id gets there : updateForm() in  quest-controller.php'); ça ça marche 
        $questManager = new QuestManager();
        $quest = $questManager->select($id);
        require 'view/update_form.php';
    }

    public function updateQuest($id){
        $questManager = new QuestManager();
        $quest = $questManager->select($id);
        $quest = new Quest($id, $_POST['title'], $_POST['content'], $quest->getSubmitDate());
        $questManager->update($quest);
        header('Location: /prototype-mvc/index.php?controller=default&action=home');
    }

    public function resetIndex(){
        $questManager = new QuestManager;
        $questManager->resetIndex();
        header('Location: /prototype-mvc/index.php?controller=default&action=home');

    }
}