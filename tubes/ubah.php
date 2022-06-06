<?php 
session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data stok berdasarkan id
$stk = query("SELECT * FROM stok WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data stok</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                <h2>Ubah data stok</h2>
                </div>
                <div class="card-body">
                <input type="hidden" name="id" value="<?= $stk["id"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $stk["gambar"]; ?>">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $stk["nama"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Sistem Operasi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="sistemoperasi" id="sistemoperasi" required value="<?= $stk["sistemoperasi"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Processor</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="processor" id="processor" required value="<?= $stk["processor"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="warna" id="warna" required value="<?= $stk["warna"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="harga" id="harga" required value="<?= $stk["harga"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="stok" id="stok" value="<?= $stk["stok"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-5">
                    <img src="img/<?= $stk['gambar']; ?>" width="100"><br>
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