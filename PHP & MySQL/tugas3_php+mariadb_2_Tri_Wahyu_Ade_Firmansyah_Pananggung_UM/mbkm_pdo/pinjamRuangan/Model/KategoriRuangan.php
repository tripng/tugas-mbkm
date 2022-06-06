<?php 
    class KategoriRuangan{
        public $connection;

        public function __construct(){
            global $conn;
            $this->connection = $conn; 
        }
        public function getAll(){
            $sql = "SELECT * FROM kategori_ruangan";
            $statement = $this->connection->query($sql);
            return $statement->fetchAll();
        }
        public function getById($id){
            $sql = "SELECT * FROM kategori_ruangan WHERE id = $id";
            $statement = $this->connection->query($sql);
            return $statement->fetch();
        }
        public function save($data){
            $sql = "INSERT INTO kategori_ruangan (nama,keterangan) VALUES (?,?)";
            $statemant = $this->connection->prepare($sql);
            $statemant->execute($data);
        }
    }
?>