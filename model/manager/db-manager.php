<?php

    class DBManager{
        protected $db;
        private $host = '127.0.0.1';
        private $dbName = 'mvc-db';
        private $username = 'root';
        private $password = '';
    

        public function __construct(){
        
            try{
                $this->db = new PDO('mysql:host='.$this->host.'; dbname='.$this->dbName, $this->username, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                die('Erreur '.$e->getMessage());
            }
        }
    }
?>