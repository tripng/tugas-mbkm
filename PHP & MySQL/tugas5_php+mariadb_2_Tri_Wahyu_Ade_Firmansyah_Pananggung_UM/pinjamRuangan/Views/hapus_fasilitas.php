<?php 
    require_once 'Model/Fasilitas.php';
    require_once 'connection.php';
    $fasilitas = new Fasilitas();
    $id = [(int)$_GET['id']];
    // echo "<h1>haha</h1>";
    // echo "<h1>haha</h1>";
    $fasilitas->delete($id);
    var_dump($id);
    // if($fasilitas->delete($id)){
        // }
            header("Location:?hal=fasilitas");
?>