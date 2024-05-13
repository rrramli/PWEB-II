<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../index.php';
include_once '../../config.php';
include_once '../../controllers/SuplierController.php';

$database = new database();
$db = $database->getKoneksi();

$suplierController = new SuplierController($db);
$suplier = $suplierController->getAllSuplier();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="px-5">
        <h3 class="mt-3">Tambah Data Produk</h3>
        <form method="post" action="proses_tambah">
            <div class="form-group">
            <label for="sup_id">Pilih Suplier</label>
            <select name="sup_id" id="sup_id">
            <?php   
            foreach($suplier as $suplier){
                echo "<option value=". $suplier['sup_id'] .">". $suplier['sup_nama'] ."</option>";
                }?>
            </select>
        </div>
            <div class="form-group">
                <label for="nm_brg">Nama Barang</label>
                <input type="text" class="form-control" name="nm_brg" id="nm_brg">
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select class="form-select" name="kategori" aria-label="Default select example">
                    <option selected></option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Rumah Tangga">Rumah Tangga</option>
                    <option value="Bumbu Dapur">Bumbu Dapur</option>
                    <option value="Kosmetik">Kosmetik</option>
                    <option value="Obat-obatan">Obat-obatan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
            </div>
            <div class="form-group">
                <label for="kedaluwarsa">Kedaluwarsa</label>
                <input type="date" class="form-control" name="kedaluwarsa" id="kedaluwarsa">
            </div>

            <!-- <div class="form-group">
            <label for="sup_id">Suplier</label>
            <input type="text" class="form-control" name="sup_id" id="sup_id">
        </div> -->
        <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
    </div>
    </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>