<?php
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    
    function __construct(){
        echo "Saya Mahasiswa Teknik Informatika<br>";
    }
    function __destruct(){
        echo "Politeknik Negeri Cilacap";
    }
    //method menampilkan nama
    function tampil_nama(){
        return "Nama Saya adalah Ramli Rahmansyah<br>";
    }
    //method menampilkan alamat
    function tampil_alamat(){
        return "Alamat Saya di Jalan Damar, Karangtalun";
    }
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah<br>";
    }
}
//membuat objek nama mahasiswa
$nama_mahasiswa=new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();