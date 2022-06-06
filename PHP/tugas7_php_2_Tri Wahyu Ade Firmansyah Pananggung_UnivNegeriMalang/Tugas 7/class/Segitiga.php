<?php 
    class Segitiga extends Bentuk2D{
        public $sisi;
        public $tinggi;
        function __construct($sisi, $tinggi){
            $this->sisi = $sisi;
            $this->tinggi = $tinggi;
        }
        public function namaBidang(){
            return "Segitiga";
        }
        public function luasBidang() {
            return 0.5*$this->sisi*$this->tinggi;
        }
        public function kelilingBidang() {
            return $this->sisi*3;
        }
        public function keterangan(){
            return 'S = '.$this->sisi.' | T = '.$this->tinggi;
        }
    }