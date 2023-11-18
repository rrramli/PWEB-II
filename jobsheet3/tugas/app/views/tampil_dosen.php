<?php
//memanggil class
include '../classes/database.php';
//instansiasi class database
$db=new database;
include 'navbar.php';
?>
<div class="px-2">
  <br>
  <?php
  if(isset($_GET['success'])){
    ?>
    <div class="alert alert-success" role="alert" id="successAlert">
      <?php echo $_GET['success']?>
    </div>
    <script>
      // Menutup pesan alert setelah 2 detik
      setTimeout(function(){
        document.getElementById('successAlert').style.display = 'none';
      }, 2000); // Waktu dalam milidetik (misalnya 2000 untuk 2 detik)
    </script>
    <?php
  }
  ?>
</div>
<div class="px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2 mt-2" href="input_dosen.php">Tambah Dosen</a><br>
<table class="table">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no=1;
foreach($db->tampil_dosen() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nidn'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $x['id'];?> &aksi=edit">Edit</a>
            <a class="btn btn-danger" href="proses_dosen.php?id=<?php echo $x['id'];?> &aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</div>
</table>