<?php

class Suplier{
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllSuplier(){
        $query = "SELECT * FROM suplier";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    
    public function createSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp){
        $query = "INSERT INTO suplier (sup_id, sup_nama, sup_alamat, email, telp)
        VALUES('$sup_id', '$sup_nama', '$sup_alamat', '$email', '$telp')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getSuplierById($sup_id){
        $query = "SELECT * FROM suplier where sup_id=$sup_id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp){
        $query = "UPDATE suplier set sup_nama='$sup_nama', sup_alamat='$sup_alamat', email='$email', telp='$telp' where sup_id='$sup_id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function deleteSuplier($sup_id){
        $query= "DELETE FROM suplier WHERE sup_id=$sup_id";
        $result= mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}