<?php 
    class Lingkaran extends Bentuk2D{
        public $jari2;
        public const phi = 3.14;
        function __construct($jari2){
            $this->jari2 = $jari2;
        }
        public function namaBidang(){
            return "Lingkaran";
        }
        public function luasBidang() {
            return Self::phi*($this->jari2**2);
        }
        public function kelilingBidang() {
            return 2*Self::phi*$this->jari2;
        }
        public function keterangan(){
            return 'r = '.$this->jari2;
        }
    }