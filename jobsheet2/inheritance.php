<?php
class manusia{
    public $nama_saya;

    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
}
//subclass dari manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
}
//instansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Ramli");
$informatika->panggil_mahasiswa("Rahmansyah");

//menampilkan
echo "Nama Depan    : ". $informatika->nama_saya. "<br>";
echo "Nama Belakang : ". $informatika->nama_mahasiswa. "<br>";