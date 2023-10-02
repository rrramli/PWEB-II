<?php
//membuat class mahasiswa
class mahasiswa
{
    //property private
    private $nim="220302020";
    //menuliskan property public
    public $nama;
    //private method
    function tampil_nim(){
        return "NIM Saya adalah ".$this->nim;
    }
    //public method menampilkan nama
    public function tampil_nama(){
        return "Nama Saya adalah Ramli Rahmansyah<br>";
    }
    //method menampilkan alamat
    function tampil_alamat(){
        return "<br>Alamat Saya di Jalan Damar, Karangtalun";
    }
}
//membuat objek mahasiswa
$mahasiswa=new mahasiswa();

//menampilkan objek ke layar
echo $mahasiswa->tampil_nama();
echo $mahasiswa->tampil_nim();
echo $mahasiswa->tampil_alamat();
