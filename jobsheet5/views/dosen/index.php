<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<div class="px-5">
    <h3>Data Dosen</h3>
    <a class="btn btn-primary mb-2 mt-2" href="dosenTambah">Tambah Data Dosen</a><br>
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($dosen as $x) {
            ?>
            <tr>
                <td>
                    <?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $x['nidn'] ?>
                </td>
                <td>
                    <?php echo $x['nama'] ?>
                </td>
                <td>
                    <?php echo $x['alamat'] ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="dosenEdit?id=<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="dosenHapus?id=<?php echo $x['id']; ?>"
                        onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
</div>
</table>