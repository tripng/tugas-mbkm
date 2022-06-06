<?php 
    require_once '../Model/KategoriRuangan.php';
    require_once '../connection.php';
    
    if($_POST['button']=='tambah'){
        $simpan = new KategoriRuangan();
        $data = [$_POST['nama'],$_POST['keterangan']];
        $simpan->save($data);
        header('Location:../?hal=kategori_ruangan');
    }
    else {
        $simpan = new KategoriRuangan();
        $data = [$_POST['nama'],(string)$_POST['ket'],(int)$_POST['id']];
        $simpan->edit($data);
        header('Location:../?hal=kategori_ruangan');
    }
?>