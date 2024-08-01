<?php

class Mahasiswa {

        private string $nim;
        public string $nama;

        public function setNim(string $a) {
            $this->nim = $a;
        }

        public function setNama(string $nama) {
            $this->nama = $nama;
        }

        public function getNim() {
            return $this->nim;
        }
    }

    $mhsw = new Mahasiswa;
    $mhsw->setNim("17021000");
    $mhsw->setNama("Kiki");

    echo "<p>" . $mhsw->getNim() . "</p>";
    echo "<p>" . $mhsw->nama . "</p>";