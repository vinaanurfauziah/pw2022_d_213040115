<?php 
session_start();
require 'functions.php';

// cek cookie
// if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];

//     // ambil username berdasarkan id
//     $result = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");
//     $row = mysqli_fetch_assoc($result);

//     // cek cookie dan username
//     if( $key === hash('sha256', $row['username']) ) {
//         $_SESSION['login'] = true;
//     }
// }

if( isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}



if(isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username 
    if( mysqli_num_rows($result) === 1 ){

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
        //    set session
        $_SESSION["login"] = true;

        // cek remember me
        // if(isset($_POST['remember']) ) {
        //     // buat cookie
        //     setcookie('id', $row['id'], time()+60); 
        //     setcookie('key', hash('sha256', $row['username'])); 
        // }

        // cek dia user atau admin
        if($row["role"] === 'admin') {
            header("Location: index.php");
            exit;
        } else if($row["role"] === "user") {
            header("Location: user/index.php");
            exit;
        }

       }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<?php if( isset($error)) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<form action="" method="post" class="box">
            <h1>Login</h1>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" name="login" value="Login"></input>
            <a href="registrasi.php">Belum punya akun? Daftar disini!</a>
       

</form>

</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>