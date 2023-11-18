<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

//instansiasi class database
$database = new database;
$db= $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php">Tambah Mahasiswa</a><br>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($mahasiswa as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['tempat_lahir'] ?></td>
        <td><?php echo $x['tanggal_lahir'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_mhs.php?id=<?php echo $x['id'];?> &aksi=edit">Edit</a>
            <a href="proses_mhs.php?id=<?php echo $x['id'];?> &aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>