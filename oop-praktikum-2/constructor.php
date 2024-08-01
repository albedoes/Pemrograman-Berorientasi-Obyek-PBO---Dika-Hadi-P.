<?php

class mahasiswa {

    public string $nim;
    public string $nama;

    //constructor

    public function __construct(string $a, string $b) {

        $this->nim = $a;
        $this->nama = $b;
    }
}