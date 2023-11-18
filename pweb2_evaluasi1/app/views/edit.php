<?php
include '../classes/database.php';
$bk=new Buku();
?>

<h3>Edit Data Buku</h3>
<form action="proses.php?aksi=update" method="post">

<?php
foreach($bk->edit($_GET['id']) as $d){

}
?>
    <table>
        <tr>
            <td>Judul</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" name="judul" value="<?php echo $d['judul']?>"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $d['pengarang']?>"></td>
        </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit']?>"></td>
        </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="harga" value="<?php echo $d['harga']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php

?>
</form>