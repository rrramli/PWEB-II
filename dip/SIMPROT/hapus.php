<?php

include_once 'config.php';
include_once 'ProdukController.php';

$database= new database();
$db= $database->getKoneksi();

if(isset($_GET['kd'])){
    $kd= $_GET['kd'];

    $produkController= new ProdukController($db);
    $result =$produkController->deleteProduk($kd);
    if ($result) {
        header("location:tables-produk.php"); // Adjust the URL based on your project structure
        exit();
    }else{
        echo "Gagal Hapus Data";
    }
}