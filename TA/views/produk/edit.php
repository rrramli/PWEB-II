<!DOCTYPE html>
<html lang="en">

<?php include_once '../../index.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<?php
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['kd'])) {
    $kd = $_GET['kd'];

    $produkController = new ProdukController($db);
    $produkData = $produkController->getProdukById($kd);

    if ($produkData) {
        if (isset($_POST['submit'])) {
            $nm_brg = $_POST['nm_brg'];
            $kategori = $_POST['kategori'];
            $kedaluwarsa = $_POST['kedaluwarsa'];
            $harga = $_POST['harga'];

            $result = $produkController->updateProduk($kd, $nm_brg, $kategori, $kedaluwarsa, $harga);

            if ($result) {
                header('Location: produk');
                exit();
            } else {
                header('Location: produkEdit' . $kd);
                exit();
            }
        }
    } else {
        echo "Produk Tidak Ditemukan";
    }
}
?>

<div class="container">
    <h3 class="mt-3">Edit Data Produk</h3>
    <?php
    if ($produkData) {
        ?>
        <form action="" method="post">
            <?php
            foreach ($produkData as $d => $value) {
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
