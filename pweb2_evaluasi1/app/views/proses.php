<?php
include '../classes/database.php';
$bk=new Buku();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $bk->tambah($_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:index.php");
}elseif($aksi=="update"){
    $bk->update($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:index.php");
}elseif($aksi=="hapus"){
    $bk->hapus($_GET['id']);
    header("location:index.php");
}