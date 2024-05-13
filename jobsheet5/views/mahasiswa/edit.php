<!DOCTYPE html>
<html lang="en">

<?php include_once '../../index.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header('Location: mahasiswa');
                exit();
            } else {
                header('Location: mahasiswaEdit' . $id);
                exit();
            }
        }
    } else {
        echo "Mahasiswa Tidak Ditemukan";
    }
}
?>

<div class="container">
    <h3 class="mt-3">Edit Data Mahasiswa</h3>
    <?php
    if ($mahasiswaData) {
        ?>
        <form action="" method="post">
            <?php
            foreach ($mahasiswaData as $d => $value) {
                ?>
                <div class="form-group row">
                    <label for="<?php echo $d; ?>" class="col-sm-2 col-form-label"><?php echo ucfirst($d); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>" required>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                </div>
            </div>
        </form>
        <?php
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
