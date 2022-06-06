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
            $sql = "SELECT * FROM fasilitas WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($id);
            return $statement->fetch();
        }
        public function getFasilitas(array $id){
            $sql = "SELECT f.nama nama_fasilitas,f.keterangan ket_fasilitas,r.nama nama_ruangan,status,k.nama nama_kategori,k.keterangan kategori_keterangan, r.foto foto, g.nama nama_gedung
                    FROM fasilitas f 
                    INNER JOIN ruangan r ON f.id = r.fasilitas_id 
                    INNER JOIN kategori_ruangan k ON r.kategori_ruangan_id = k.id
                    INNER JOIN gedung g ON g.id = r.gedung_id
                    WHERE f.id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($id);
            return $statement->fetch();
        }
        public function edit(array $data){
            $sql = "UPDATE fasilitas SET
                    nama = ?,
                    keterangan = ?
                    WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($data);
        }
        public function delete(array $data){
            $sql = "DELETE FROM fasilitas WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute($data);
        }
    }
?>