<?php

class Hewan{
    public $nama;
    public $darah;
    public $jumlahKaki;
    public $keahlian;

    public function atraksi(){
        return "$this->nama, $this->darah, $this->jumlahKaki, $this->keahlian";
    }
}

$hewan1 = new Hewan();
$hewan1->nama = "Harimau";
$hewan1->darah = 50;
$hewan1->jumlahKaki = 4;
$hewan1->keahlian = "lari cepat";


$hewan2 = new Hewan();
$hewan2->nama = "Elang";
$hewan2->darah = 50;
$hewan2->jumlahKaki = 2;
$hewan2->keahlian = "terbang tinggi";


echo "Hewan1 : $hewan1->nama, $hewan1->darah, $hewan1->jumlahKaki, $hewan1->keahlian";
echo "<br>";
echo "Hewan2 : $hewan2->nama, $hewan2->darah, $hewan2->jumlahKaki, $hewan2->keahlian";

?>