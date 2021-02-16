<?php

class Fight{
    public $attackPower;
    public $deffencePower;

    public function serang(){
        return "$this->nama, $this->$attackPower, $this->$deffencePower";
    }
}

//metod serang dan diserang

$hewan1 = new Fight();
$hewan1->nama = "Harimau";
$hewan1->attackPower = 7;
$hewan1->deffencePower = 8;

$hewan2 = new Fight();
$hewan2->nama = "Elang";
$hewan2->attackPower = 10;
$hewan2->deffencePower = 5;

echo "Hewan1 : $hewan1->nama, $hewan1->attackPower, $hewan1->deffencePower";
echo "<br>";
echo "Hewan2 : $hewan2->nama, $hewan2->attackPower, $hewan2->deffencePower";

?>