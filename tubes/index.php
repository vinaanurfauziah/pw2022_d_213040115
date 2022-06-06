<?php 
session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="assets/1.jpg" class="d-block w-100" alt="..." width="80px" height="690px">
        </div>
        <div class="carousel-item">
        <img src="assets/2.jpg" class="d-block w-100" alt="..." width="80px" height="690px">
        </div>
        <div class="carousel-item">
        <img src="assets/3.jpg" class="d-block w-100" alt="..." width="80px" height="690px">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
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
                        <th>Processor</th>
                        <th>Sistem Operasi</th>
                        <th>Warna</th>
                        <th>Harga</th>
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
                        <td><?= $row["sistemoperasi"]; ?></td>
                        <td><?= $row["processor"]; ?></td>
                        <td><?= $row["warna"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
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