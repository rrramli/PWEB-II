<?php
// memanggil class model database
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';
require '../../index.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$produkController = new ProdukController($db);
$produk = $produkController->getAllProduk();
?>

<div class="px-5">
    <h3>Data Produk</h3>
    <a class="btn btn-primary mb-2 mt-2" href="produkTambah">Tambah Produk</a><br>
    <table class="table">
        <tr>
            <th>No</th>
            <th>ID Suplier</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Kedaluwarsa</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($produk as $x) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['sup_id'] ?></td>
                <td><?php echo $x['nm_brg'] ?></td>
                <td><?php echo $x['kategori'] ?></td>
                <td><?php echo $x['kedaluwarsa'] ?></td>
                <td><?php echo $x['harga'] ?></td>
                <td>
                    <a class="btn btn-warning" href="produkEdit?kd=<?php echo $x['kd'];?>">Edit</a>
                    <a class="btn btn-danger" href="produkHapus?kd=<?php echo $x['kd'];?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
