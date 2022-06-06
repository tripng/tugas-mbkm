<?php 
    class Fasilitas{
        public $connection;

        public function __construct(){
            global $conn;
            $this->connection = $conn; 
        }
        public function getAll(){
            $sql = "SELECT * FROM fasilitas";
            $statement = $this->connection->query($sql);
            return $statement->fetchAll();
        }
        public function getById($id){
            $sql = "SELECT * FROM fasilitas WHERE id = $id";
            $statement = $this->connection->query($sql);
            return $statement->fetch();
        }
    }
?>