<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/SuplierController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$suplierController = new SuplierController($db);
$suplier = $suplierController->getAllSuplier();
?>

<div class="px-5">
    <h3>Data Suplier</h3>
    <a class="btn btn-primary mb-2 mt-2" href="suplierTambah">Tambah Data Suplier</a><br>
    <table class="table">
        <tr>
            <th>No</th>
            <th>ID Suplier</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($suplier as $x) {
            ?>
            <tr>
                <td>
                    <?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $x['sup_id'] ?>
                </td>
                <td>
                    <?php echo $x['sup_nama'] ?>
                </td>
                <td>
                    <?php echo $x['sup_alamat'] ?>
                </td>
                <td>
                    <?php echo $x['email'] ?>
                </td>
                <td>
                    <?php echo $x['telp'] ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="suplierEdit?sup_id=<?php echo $x['sup_id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="suplierHapus?sup_id=<?php echo $x['sup_id']; ?>"
                        onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
</div>
</table>