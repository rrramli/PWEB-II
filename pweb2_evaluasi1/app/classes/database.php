<?php
class Buku{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $database="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
    function tampil_buku(){
        $data=mysqli_query($this->koneksi, "select * from buku");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tambah($judul, $pengarang, $tahun_terbit, $harga){
        mysqli_query($this->koneksi,"insert into buku (judul, pengarang, tahun_terbit, harga) values ('$judul','$pengarang','$tahun_terbit, $harga')");
    }

    function edit($id){
        $data=mysqli_query($this->koneksi, "select * from buku where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update($id, $judul, $pengarang, $tahun_terbit, $harga){
        mysqli_query($this->koneksi, "update buku set judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', harga='$harga', where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi, "delete from buku where id='$id'");
    }
}

