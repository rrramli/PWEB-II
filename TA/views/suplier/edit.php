<?php
include_once '../../config.php';
include_once '../../controllers/SuplierController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['sup_id'])) {
    $sup_id = $_GET['sup_id'];

    $suplierController = new SuplierController($db);
    $suplierData = $suplierController->getSuplierById($sup_id);

    if (!empty($suplierData)) {
        if (isset($_POST['submit'])) {
            $sup_nama = $_POST['sup_nama'];
            $sup_alamat = $_POST['sup_alamat'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];

            $result = $suplierController->updateSuplier($sup_id, $sup_nama, $sup_alamat, $email, $telp);

            if ($result) {
                header('location: suplier');
            } else {
                header('location: edit');
            }
        }
    } else {
        echo "Suplier Tidak Ditemukan";
    }
}
?>
<div class="px-5">
<h3>Edit Data Suplier</h3>

<?php
if (!empty($suplierData)) {
    ?>
    <form action="" method="post">
        <?php
        foreach ($suplierData as $d => $value) {
            ?>
            <div class="form-group">
                <label for="<?php echo $d; ?>"><?php echo ucfirst($d); ?></label>
                <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>" required>
            </div><br>
            <?php
        }
        ?>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        </div>
    </form>
    <?php
}
?>
</div>