<?php
include '../classes/database.php';
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h3 class="mt-3">Edit Data Dosen</h3>
    <form action="proses_dosen.php?aksi=update" method="post">
        <?php
        foreach ($db->edit($_GET['id']) as $d) {
        }
        ?>
        <div class="form-group">
            <label for="nidn">NIDN</label>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <input type="text" class="form-control" name="nidn" value="<?php echo $d['nidn'] ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo $d['alamat'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
