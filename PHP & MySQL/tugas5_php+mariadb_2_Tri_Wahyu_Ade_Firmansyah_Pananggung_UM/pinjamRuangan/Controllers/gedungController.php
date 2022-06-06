<?php 
    require_once '../Model/Gedung.php';
    require_once '../connection.php';
    
    if(isset($_POST['idx'])){
        $dlt = new Gedung();
        $id = [(int)$_POST['idx']];
        $dlt->delete($id);
        header('Location:../?hal=pinjam');
    }
    else if(isset($_POST)){
        $simpan = new Gedung();
        $data = [$_POST['kode'],$_POST['nama'],$_POST['alamat']];
        $simpan->save($data);
        header('Location:../pinjam.php');
    }
    else http_response_code(404);

?>