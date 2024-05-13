<!DOCTYPE html>
<html lang="en">
<?php include '../../index.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Suplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="px-5">
    <h3 class="mt-3">Tambah Data Suplier</h3>
    <form action="proses_tambah_sp" method="post">
        <div class="form-group">
            <label for="sup_id">ID Suplier</label>
            <input type="text" class="form-control" name="sup_id" id="sup_id">
        </div>
        <div class="form-group">
            <label for="sup_nama">Nama</label>
            <input type="text" class="form-control" name="sup_nama" id="sup_nama">
        </div>
        <div class="form-group">
            <label for="sup_alamat">Alamat</label>
            <textarea class="form-control" name="sup_alamat" id="sup_alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" rows="5"></input>
        </div>
        <div class="form-group">
            <label for="telp">No. Telepon</label>
            <input type="text" class="form-control" name="telp" id="telp" rows="5"></input>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

