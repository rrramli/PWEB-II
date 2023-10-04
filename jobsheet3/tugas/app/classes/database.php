<?php
class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $database="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    function tampil_dosen(){
        $data=mysqli_query($this->koneksi, "select * from dosen ");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_dosen($nidn, $nama, $alamat){
        mysqli_query($this->koneksi,"insert into dosen (nidn, nama, alamat) values ('$nidn','$nama','$alamat')");
    }

    function edit($id){
        $data=mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update($id, $nidn, $nama, $alamat){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}