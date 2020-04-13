<?php
    class QuestManager extends DBManager{
        
        public function __construct(){
            parent::__construct();
        }

        public function selectAll(){
            $quests = [];
            $sql = 'SELECT * FROM quests ORDER BY submitdate';
            foreach($this->db->query($sql) as $row){
                $quests[] = new Quest($row['id'], $row['title'], $row['content'], $row['submitdate']);
            }
            return $quests;
        }

        public function insert(Quest $quest){
            $title = $quest->getTitle();
            $content = $quest->getContent();
            $submitdate = $quest->getSubmitDate();
            $req = $this->db->prepare('INSERT INTO quests(title, content, submitdate) VALUES (?,?,?)');
            $req->bindParam(1, $title);
            $req->bindParam(2, $content);
            $req->bindParam(3, $submitdate);
            $req->execute();
            $quest->setID($this->db->lastInsertId());
        }

        public function delete($id){
            $req = $this->db->prepare('DELETE FROM quests WHERE id = ?');
            $req->bindParam(1, $id);
            $req->execute();
        }

        public function select($id){
            // echo('<br>the id gets there : select() in  quest-manager.php');
            // var_dump($id);
            $req = $this->db->prepare('SELECT * FROM quests WHERE id=?');
            $req->bindParam(1, $id);
            $req->execute();
            $res = $req->fetch();
            $quest = new Quest($res['id'], $res['title'], $res['content'], $res['submitdate']);
            
            // echo('<br> quest_manager.php >> select($id) >> return $quest :var_dump($quest) : <br>');
            // var_dump($quest);
            return $quest;
        }

        public function update(Quest $quest){
            $title = $quest->getTitle();
            $content = $quest->getContent();
            $submitdate = $quest->getSubmitDate();
            $id = $quest->getId();
            $req = $this->db->prepare('UPDATE quests SET title=? content=?, submitdate=? WHERE id = ?');
            $req->bindParam(1, $title);
            $req->bindParam(2, $content);
            $req->bindParam(3, $submitdate);
            $req->bindParam(4, $id);
            $req->execute();
        }
    }
?>