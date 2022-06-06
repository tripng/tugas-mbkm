<?php 
class KonversiSuhu{
    var $suhuAwal;
    var $besaranSuhu;
    var $suhuTujuan;
    function __construct($suhuAwal,$besaranSuhu,$suhuTujuan){
        $this->suhuAwal = $suhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->suhuTujuan = $suhuTujuan;
    }
    function konversi() {
        if($this->suhuAwal == 'Celcius' && $this->suhuTujuan == 'Fahrenheit') return (9/5*$this->besaranSuhu)+32;
        else if($this->suhuAwal == 'Fahrenheit' && $this->suhuTujuan == 'Celcius') return 9/5*($this->besaranSuhu-32);
        else if($this->suhuAwal == 'Celcius' && $this->suhuTujuan == 'Reamur') return ($this->besaranSuhu*4/5);
        else if($this->suhuAwal == 'Reamur' && $this->suhuTujuan == 'Celcius') return ($this->besaranSuhu*5/4);
        else if($this->suhuAwal == 'Reamur' && $this->suhuTujuan == 'Fahrenheit') return (9/4*$this->besaranSuhu)+32;
        else if($this->suhuAwal == 'Fahrenheit' && $this->suhuTujuan == 'Reamur') return ($this->besaranSuhu-32)*4/9;
        else return 0;
    }
    function html($tag,$isi){
        return "<$tag>$isi</$tag>";
    }
    function getData(){
        echo $this->html('td',$this->suhuAwal);
        echo $this->html('td',$this->besaranSuhu);
        echo $this->html('td',$this->suhuTujuan);
        echo $this->html('td',number_format($this->konversi(),1,'.',''));
    }
}
?>