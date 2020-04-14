<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $questController = new DefaultController();
        $questController->home();
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'addForm'){
        $questController = new QuestController();
        $questController->addForm();
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'addQuest'){
        $questController = new QuestController();
        $questController->persistForm();
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $questController = new QuestController();
        $questController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $questController = new QuestController();
        $questController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'updateQuest' && isset($_GET['id'])){
        $questController = new QuestController();
        $questController->updateQuest($_GET['id']);
    }
    else if($_GET['controller'] === 'quest' && $_GET['action'] === 'resetIndex'){
        $questController = new QuestController();
        $questController->resetIndex();
    }
    else{
        throw new Exception('404', 404);
    }
    
//http://localhost/correctionMVC/index.php?controller=default&action=home to get in

?>