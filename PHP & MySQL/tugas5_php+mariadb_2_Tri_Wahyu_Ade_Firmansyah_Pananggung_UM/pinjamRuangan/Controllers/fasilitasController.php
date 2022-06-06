<?php 
    require_once '../Model/Fasilitas.php';
    require_once '../connection.php';
    if(isset($_POST['hapusFasilitas'])){
        $dlt = new Fasilitas();
        $id = [(int)$_POST['idx']];
        $dlt->delete($id);
        header('Location:../?hal=fasilitas');
    }
    else if(isset($_POST)){
        $simpan = new Fasilitas();
        $data = [$_POST['nama'],$_POST['ket'],(int)$_POST['id']];
        $simpan->edit($data);
        header('Location:../?hal=fasilitas');
    }
    else http_response_code(404);
    echo "Page No Found";
?>