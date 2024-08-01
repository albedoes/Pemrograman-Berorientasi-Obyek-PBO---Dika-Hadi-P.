<?php

class Prodi {

    public static string $nama = "Sistem Informasi";

    final static function setNama() {
        return self::$nama;
    }
}

final class Mahasiswa extends Prodi {

    public static function setProdi() {

        return parent::setNama();
    }
}

echo Mahasiswa::setProdi();