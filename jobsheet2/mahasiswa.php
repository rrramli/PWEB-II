<?php
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    //method menampilkan nama
    function tampil_nama(){
        return "Nama Saya adalah Ramli Rahmansyah";
    }
    //method menampilkan alamat
    function tampil_alamat(){
        return "Alamat Saya di Jalan Damar, Karangtalun";
    }
}
//membuat objek nama mahasiswa
$nama_mahasiswa=new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
