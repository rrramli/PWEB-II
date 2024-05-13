<?php

include_once 'config.php';
include_once 'ProdukController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $sup_id = $_POST['sup_id'];
    $nm_brg = $_POST['nm_brg'];
    $kategori = $_POST['kategori'];
    $kedaluwarsa = date('Y-m-d', strtotime($_POST['kedaluwarsa']));
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    //$sup_id = $_POST['sup_id']; // Anda perlu mendapatkan nilai 'sup_id' dari formulir atau dari sumber lainnya

    $produkController = new ProdukController($db);
    $result = $produkController->createProduk($sup_id, $nm_brg, $kategori, $kedaluwarsa, $harga, $stok);

    if ($result) {
        header('Location: tables-produk.php'); // Use an absolute path or full URL
        exit();
    } else {
        header('Location: tambah.php'); // Use an absolute path or full URL
        exit();
    }
}
