<?php
class manusia{
    private $nama_saya;
    protected $alamat;
    
    public function panggil_nm($saya){
        $this->nama_saya=$saya;
    }
    public function ambil_nm(){
        return $this->nama_saya;
    }
    public function panggil_alamat($almt){
        $this->alamat=$almt;
    }
    public function ambil_alamat(){
        return $this->alamat;
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

$informatika->panggil_nm("Ramli");
$informatika->panggil_mahasiswa("Rahmansyah");
$informatika->panggil_alamat("Jalan Damar");

//menampilkan
echo "Nama Depan    : ". $informatika->ambil_nm(). "<br>";
echo "Nama Belakang : ". $informatika->nama_mahasiswa. "<br>";
echo "Alamat    : ". $informatika->ambil_alamat(). "<br>";