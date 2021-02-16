<?php

// class Elang{
//     public $nama = 'elang';
//     public $darah = 50;
//     public $jumlahKaki = 2;
//     public $keahlian = 'terbang tinggi';
//     public $attackPower = 10;
//     public $deffencePower = 5;
// }
class Elang{
        public $nama;
        public $darah;
        public $jumlahKaki;
        public $keahlian;
        public $attackPower;
        public $deffencePower;
    
        public function getInfoHewan(){
            return "$this->nama, $this->darah, $this->jumlahKaki, $this->keahlian, $this->attackPower, $this->deffencePower";
        }
    }
    $hewan2 = new Elang();
    $hewan2->nama = "Elang";
    $hewan2->darah = 50;
    $hewan2->jumlahKaki = 2;
    $hewan2->keahlian = "terbang tinggi";
    $hewan2->attackPower = 10;
    $hewan2->deffencePower = 5;
    
    echo $hewan2->getInfoHewan();
    

?>