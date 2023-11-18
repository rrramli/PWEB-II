<?php
//memanggil class
include '../app/classes/database.php';
//instansiasi class
$bk=new Buku
?>

<h3>Data Buku</h3>
<a href="../app/views/tambah.php">Tambah Buku</a><br>
<table border="1">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($bk->tampil_buku() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['judul'] ?></td>
        <td><?php echo $x['pengarang'] ?></td>
        <td><?php echo $x['tahun_terbit'] ?></td>
        <td><?php echo $x['harga']?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id'];?> &aksi=edit">Edit</a>
            <a href="proses.php?id=<?php echo $x['id'];?> &aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>