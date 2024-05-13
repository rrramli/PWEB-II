<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

    if ($result) {
        header('Location: mahasiswa'); // Use an absolute path or full URL
        exit();
    } else {
        header('Location: mahasiswaTambah'); // Use an absolute path or full URL
        exit();
    }
}
