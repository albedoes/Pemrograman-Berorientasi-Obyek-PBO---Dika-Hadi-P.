<?php

class mahasiswa {

    public static function setNama(string $nama) {

        return $nama;
    }
}

//instation with scope resolution operator
// paamayim nekudotayim

echo mahasiswa::setNama('faiza');