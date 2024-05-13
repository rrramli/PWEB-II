<?php

include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database= new database();
$db= $database->getKoneksi();

if(isset($_GET['kd'])){
    $kd= $_GET['kd'];

    $produkController= new ProdukController($db);
    $result =$produkController->deleteProduk($kd);
    if ($result) {
        header("location:produk"); // Adjust the URL based on your project structure
        exit();
    }else{
        echo "Gagal Hapus Data";
    }
}