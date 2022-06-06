<?php 
    class Villa extends Assets{
        public $keterangan;
        function __construct($nama,$tahun,$nilai,$keterangan){
            Parent::__construct($nama,$tahun,$nilai);
            $this->keterangan = $keterangan;
        }
        function getData($ket){
            $this->keterangan = $ket;
            Parent::getData($ket);
        }
    }
?>