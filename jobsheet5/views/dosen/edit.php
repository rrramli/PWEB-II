<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if (!empty($dosenData)) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat);

            if ($result) {
                header('location: dosen');
            } else {
                header('location: edit');
            }
        }
    } else {
        echo "Dosen Tidak Ditemukan";
    }
}
?>
<div class="px-5">
<h3>Edit Data Dosen</h3>

<?php
if (!empty($dosenData)) {
    ?>
    <form action="" method="post">
        <?php
        foreach ($dosenData as $d => $value) {
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