<?php

class mahasiswa {

    public string $nim;
    public string $nama;
    public static string $agama = "islam"; 

    public function setNim(string $nim) {
        return $nim;
    }

    public function setNama(string $b) {

        //$This keyword refers a non static member of a class

        return $this->nama = $b; 
    }

    public function getNama() {

        //$this keyword refers a non static member of a class 

        return $this->nama;
    }

    public static function getAgama() {

        //self keyword refers a static member of a class

        return self::$agama;
    }
}

//instantiation 

$mhsw =new mahasiswa();

echo $mhsw->setNim('1721000 ');

$mhsw->setNama('faiza ');

echo $mhsw->getNama() ;

echo $mhsw->getAgama( );