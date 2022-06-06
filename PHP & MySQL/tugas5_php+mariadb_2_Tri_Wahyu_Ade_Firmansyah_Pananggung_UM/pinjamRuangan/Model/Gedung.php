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
        public function save(array $data){
            $sql = "INSERT INTO gedung (kode,nama,alamat) VALUES (?,?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute($data);
        }
        public function delete(array $data){
            $sql = "DELETE FROM gedung WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($data);
        }
    }
?>