<?php
class DefaultController{

    public function home(){
        $questManager = new QuestManager;
        $quests = $questManager->selectAll();
        require 'view/home_view.php';
    }
}