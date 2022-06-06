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
            $sql = "SELECT * FROM kategori_ruangan WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($id);
            return $statement->fetch();
        }
        public function save($data){
            $sql = "INSERT INTO kategori_ruangan (nama,keterangan) VALUES (?,?)";
            $statemant = $this->connection->prepare($sql);
            $statemant->execute($data);
        }
        public function edit(array $data){
            $sql = "UPDATE kategori_ruangan SET
                    nama = ?,
                    keterangan = ?
                    WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($data);
        }
    }
?>