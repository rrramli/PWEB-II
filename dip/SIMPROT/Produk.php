<?php

class Produk
{
    private $koneksi;
    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllProduk()
    {
        $query = "SELECT * FROM produk";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createProduk($sup_id, $nm_brg, $kategori, $kedaluwarsa, $harga, $stok)
    {
        $query = "INSERT INTO produk (sup_id, nm_brg, kategori, kedaluwarsa, harga, stok)
                  VALUES('$sup_id', '$nm_brg', '$kategori', '$kedaluwarsa', '$harga', '$stok')";

        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function getProdukById($kd)
    {
        $query = "SELECT * FROM produk where kd=$kd";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateProduk($kd, $nm_brg, $kategori, $kedaluwarsa, $harga, $stok)
    {
        $query = "UPDATE produk set nm_brg='$nm_brg', kategori='$kategori', kedaluwarsa='$kedaluwarsa', harga='$harga', stok='$stok' where kd='$kd'";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduk($kd)
    {
        $query = "DELETE FROM produk WHERE kd=$kd";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}