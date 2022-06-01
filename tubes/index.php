<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$stok = query("SELECT * FROM stok");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $stok = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <style>
            .zoomable{
                width: 100px;
            }
            .zoomable:hover{
                transform: scale(2.5);
                transition: 0.3s ease;
            }
    </style>
</head>
<body>

<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Techne</a>
    <form class="d-flex" role="search">
      <input type="text" name="keyword" class="form-control me-2" type="search" autofocus placeholder="Search" aria-label="Search" autocomplete="off" id="keyword">
      <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>
    </form>
  </div>
</nav>
<br>

    <form action="" method="post">
    <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                <a href="tambah.php" class="btn btn-primary">Tambah</a>  <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
                <div class="card-body">

                <div id="container">
                
                <table class="table table-hover">

                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach( $stok as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning">ubah</a> 
                            <br><br>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">hapus</a>
                        </td>
                        <td><img src="img/<?= $row["gambar"]; ?>" width="100" class="zoomable"></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["deskripsi"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                    </table>
                    </div>
            </div>
        </div>


    </form>

    <br>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>