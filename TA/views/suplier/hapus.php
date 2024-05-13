<?php

include_once '../../config.php';
include_once '../../controllers/SuplierController.php';

$database= new database();
$db= $database->getKoneksi();

if(isset($_GET['sup_id'])){
    $sup_id= $_GET['sup_id'];

    $suplierController= new SuplierController($db);
    $result =$suplierController->deleteSuplier($sup_id);
    if($result){
        header("location:suplier");
    }else{
        echo "Gagal Hapus Data";
    }
}