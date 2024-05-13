<?php

 include_once "Suplier.php";

 class SuplierController{
    private $model;

    public function __construct($db) {
        $this->model = new Suplier($db);
    }

    public function getAllSuplier(){
        return $this->model->getAllSuplier();
    }

    public function createSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp){
        return $this->model->createSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp);
    }

    public function getSuplierById($sup_id){
        return $this->model->getSuplierById($sup_id);
    }

    public function updateSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp){
        return $this->model->updateSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp);
    }

    public function deleteSuplier($sup_id){
        return $this->model->deleteSuplier($sup_id);
    }
}