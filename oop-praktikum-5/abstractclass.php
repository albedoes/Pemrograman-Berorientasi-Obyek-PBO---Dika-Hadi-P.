<?php

abstract class Peserta {

    abstract protected function dataDiri();
    abstract protected function dataOrtu();
    abstract protected function dataSekolahAsal();

}

 class Siswa extends Peserta {

    public string $nama = "Kiki";

    public function dataDiri() {
        return $this->nama;
    }

    public function dataOrtu() {
        //
    }

    public function dataSekolahAsal() {

    }
 }

  class Mahasiswa extends Peserta {

    public string $nama = "Zizi";

    public function dataDiri() {
        return $this->nama;
    }

    public function dataOrtu() {
        //
    }

    public function dataSekolahAsal() {
        //

    }
}

$ssw = new Siswa;
echo "<p>" . $ssw->dataDiri() . "</p>";

$mhsw = new Mahasiswa;
echo "<p>" . $mhsw->dataDiri() . "</p>";