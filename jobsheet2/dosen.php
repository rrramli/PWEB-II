<?php
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;
    //method menampilkan nama
    function tampil_nama(){
        return "Nama Saya adalah Ramli Rahmansyah <br>";
    }
    //method menampilkan prodi
    function tampil_prodi(){
        return "Prodi D3-Teknik Informatika";
    }
}
//membuat objek nama dosen
$nama_dosen=new dosen();
$prodi_dosen=new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
echo $prodi_dosen->tampil_prodi();
