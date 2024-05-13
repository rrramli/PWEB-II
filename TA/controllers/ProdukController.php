<?php

include_once "../models/Produk.php";

class ProdukController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Produk($db);
    }

    public function getAllProduk()
    {
        return $this->model->getAllProduk();
    }

    public function createProduk($sup_id, $nm_brg, $kategori, $kedaluwarsa, $harga)
    {
        return $this->model->createProduk($sup_id, $nm_brg, $kategori, $kedaluwarsa, $harga);
    }

    public function getProdukById($kd)
    {
        return $this->model->getProdukById($kd);
    }

    public function updateProduk($kd, $nm_brg, $kategori, $kedaluwarsa, $harga)
    {
        return $this->model->updateProduk($kd, $nm_brg, $kategori, $kedaluwarsa, $harga);
    }

    public function deleteProduk($kd)
    {
        return $this->model->deleteProduk($kd);
    }
}