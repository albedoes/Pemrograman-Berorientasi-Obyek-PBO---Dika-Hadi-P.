<?php 

class Mahasiswa {

    private string $nim = "17021000";
    protected string $nama = "Kiki";

}

 class Nilai extends Mahasiswa {

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
 }

 $mhsw = new Nilai();

 echo "<p>" . $mhsw->getNim() . "</p>";
 echo "<p>" . $mhsw->getNama() . "</p>";