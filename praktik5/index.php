<?php

class Manusia {
    public $nama;
    public $umur;
    


    public function setNama ($name)
    {
        $this->nama = $name;
    }

    public function setUmur ($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . " , Umur: " . $this->umur; 
    }
}

// membuat objek 
$arya = new Manusia();
$arya->setNama("Arya Sastra Digya");
$arya->setUmur(18);
echo $arya->getinfo();

echo "<br>";

$sastra = new Manusia();
$sastra->setNama("Sastra ");
$sastra->setUmur(90);
echo $sastra->getinfo();