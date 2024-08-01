<?php

class mahasiswa {

    public int $umur = 22;

    public function getUmur() {

        try {

            if ($this->umur < 25) {
                throw new Exception('Anda masih muda');
            }

        } catch (Exception $e) {

          die ("Maaf Error, " . $e->getMessage());

        }
    }
}

$mhsw = new mahasiswa();
$mhsw ->getUmur();