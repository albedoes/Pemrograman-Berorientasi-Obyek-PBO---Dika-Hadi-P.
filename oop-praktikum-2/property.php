<?php 
class mahasiswa {

    //access modifier, typed properties dan property

    //Bisa diakses class yang sama dengan class lain
    public string $nim;
    public string $nama;
    public int $umur;

    //Hanya bisa diakses dalam class yang sama
    private string $email;

    //Hanya bisa diakses dalam class yang sama dan anak anaknya
    protected string $nama_ibu;
    
    /* 1.boo1
       2.int
       3. float
       4. string
       5. array
       6. iterable
       7. object
       8. ?(nullable)
       9. self & parent
       10. classes & interfaces
    */
}