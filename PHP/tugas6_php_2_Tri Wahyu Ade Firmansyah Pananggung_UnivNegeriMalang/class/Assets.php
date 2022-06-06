<?php 
    class Assets{
        public $nama;
        public $tahun;
        public $nilai;
        function __construct($nama,$tahun,$nilai){
            $this->nama = $nama;
            $this->tahun = $tahun;
            $this->nilai = 'Rp '.number_format($nilai,0,',','.');
        }
        function getData($ket){
            echo '<td>'.$this->nama.'</td>';
            echo '<td>'.$this->tahun.'</td>';
            echo '<td>'.$ket.'</td>';
            echo '<td>'.$this->nilai.'</td>';
        }
    }
 ?>