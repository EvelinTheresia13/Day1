<?php

// class Harimau{
//     public $nama = "harimau";
//     public $darah = 50;
//     public $jumlahKaki = 4;
//     public $keahlian = "lari cepat";
//     public $attackPower = 7;
//     public $deffencePower = 8;
// }
class Harimau{
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
$hewan1 = new Harimau();
$hewan1->nama = "Harimau";
$hewan1->darah = 50;
$hewan1->jumlahKaki = 4;
$hewan1->keahlian = "lari cepat";
$hewan1->attackPower = 7;
$hewan1->deffencePower = 8;

echo $hewan1->getInfoHewan();

?>