<?php

include_once '../../config.php';
include_once '../../controllers/SuplierController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $sup_id = $_POST['sup_id'];
    $sup_nama = $_POST['sup_nama'];
    $sup_alamat = $_POST['sup_alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];

    $suplierController = new SuplierController($db);
    $result = $suplierController->createSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp);

    if ($result) {
        header('location:suplier');
    } else {
        header('location:suplierTambah');
    }
}