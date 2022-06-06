<?php 
    class Gedung{
        public $connection;

        public function __construct(){
            global $conn;
            $this->connection = $conn; 
        }
        public function getAll(){
            $sql = "SELECT * FROM gedung";
            $statement = $this->connection->query($sql);
            return $statement->fetchAll();
        }
    }
?>