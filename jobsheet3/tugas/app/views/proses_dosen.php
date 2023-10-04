<?php
include '../classes/database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dosen.php?success=Tambah Data Berhasil");
}elseif($aksi=="update"){
    $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dosen.php?success=Update Data Berhasil");
}elseif($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_dosen.php?success=Hapus Data Berhasil");
}