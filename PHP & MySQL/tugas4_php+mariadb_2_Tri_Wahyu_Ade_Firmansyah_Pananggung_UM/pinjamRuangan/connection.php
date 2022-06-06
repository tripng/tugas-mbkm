<?php 
    $host = "localhost";
    $port = 3306;
    $db = "peminjaman_ruangan";
    $username = "root";
    $pass = "";
    
    try{
        $conn = new PDO("mysql:host=$host:$port;dbname=$db",$username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Error'.$e->getMessage();
    }
?>