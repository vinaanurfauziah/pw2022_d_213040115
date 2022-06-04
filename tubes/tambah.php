<?php 
session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data stok</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   

    <form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
            <h2>Tambah data stok</h2>
            </div>
            <div class="card-body">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-5">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="stok" id="stok">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-5">
                <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
            </div>
           
            
            <div class="card-footer text-muted">
            <button type="submit" name="submit" class="btn btn-info">Simpan!</button>
            </div>
        </div>
    </div>
    </form>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>