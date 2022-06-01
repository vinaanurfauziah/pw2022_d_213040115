<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    

<form action="" method="post" class="box">
            <h1>Registrasi</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password">
            <input type="submit" name="register" value="Register"></input>
            <a href="login.php">Sudah punya akun? login disini</a>


</form>

</body>
</html>