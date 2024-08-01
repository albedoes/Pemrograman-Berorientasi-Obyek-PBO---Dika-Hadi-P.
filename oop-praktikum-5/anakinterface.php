<?php

interface Formasi {
    public function dataFormasi();
}

interface Peserta extends Formasi {

    public function dataDiri();
    public function dataOrtu();
    public function dataSekolahAsal();

}

class Siswa implements Peserta {

    public string $nama = "Kiki";
    public string $formasi = "SI";

    public function dataFormasi() {
        return $this->formasi;
    }

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

 class Mahasiswa implements Peserta {

    public string $nama = "Zizi";
    public string $formasi = "SI";

    public function dataFormasi() {
        return $this->formasi;
    }

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
  echo "<p>" . $ssw->dataFormasi() . "</p>";

  $mhsw = new Mahasiswa;
  echo "<p>" . $mhsw->dataDiri() . "</p>";
  echo "<p>" . $mhsw->dataFormasi() . "</p>";