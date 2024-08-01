<?php 

class Mahasiswa {

    public string $nim;
    public  string $nama;
    public int $umur;
    private string $email;
    protected string $nama_ibu;

      public function setNim(string $a) {
        $this->nim = $a;
      }

      public function setNama(string $b) {
        $this->nama = $b;
      }

}

class nilai extends Mahasiswa {

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setIbu(string $c) {
        $this->nama_ibu = $c ;
    }

    public function getIbu() {
        return $this->nama_ibu;
    }
}

$nilai = new Nilai();
$nilai->setNim("17021000");
$nilai->setNama("Faiza");
$nilai->setIbu("Fifi");

echo $nilai->getNim() . " " . $nilai->getNama()
. " " . $nilai->getIbu();