<?php

class Suhu{
    private $nama;
    private $derajat;

    public function __construct($nama, $derajat){
        $this->nama = $nama;
        $this->derajat = $derajat;

    }

    public function getNama (){
    return $this->nama;
  }
    public function getDerajat (){
    return $this->derajat;
  }

   public function hasilDerajat (){
    return $this->derajat >= 35 ? 'Panas' : 'Normal';
  }

   public function predikat(){
    if ($this->derajat >= 38) {
        return 'Demam';
    } elseif ($this->derajat >= 36) {
        return 'Normal';
    } elseif ($this->derajat >= 32) {
        return 'baik';
    } else {
        return 'aman';
    }

   }
}

?>