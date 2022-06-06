<?php 
    require_once '../Model/KategoriRuangan.php';
    require_once '../connection.php';
    
    if(isset($_POST)){
        $simpan = new KategoriRuangan();
        $data = [$_POST['nama'],$_POST['keterangan']];
        $simpan->save($data);
        header('Location:../?hal=kategori_ruangan');
    }
    else http_response_code(404);

?>