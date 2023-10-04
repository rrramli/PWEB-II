<?php
//memanggil class
include '../classes/database.php';
//instansiasi class database
$db=new database
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <div class="px-4 py-3">
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
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
</div>
<div><div class="alert alert-success" role="alert" id="success-alert" style="display: none;">
  Data berhasil disimpan!
</div></div>