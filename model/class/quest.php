<?php
    class Quest{
        private $id;
        private $title;
        private $content;
        private $submitdate;

        public function __construct($id = null, $title, $content, $submitdate){
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
            $this->submitdate = $submitdate;
            if(is_null($submitdate)){
                $this->submitdate = date('Y-m-d');
            }else{
                $this->submitdate = $submitdate;
            }
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getContent(){
            return $this->content;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function getSubmitDate(){
            return $this->submitdate;
        }

        public function setSubmitDate($submitdate){
            $this->submitdate = $submitdate;
        }

    }

?>    