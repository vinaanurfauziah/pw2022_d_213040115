<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root", "", "stokbarang");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $stok = htmlspecialchars($data["stok"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar) {
        return false;
    }

    $query = "INSERT INTO stok 
                VALUES 
                ('', '$nama', '$deskripsi', '$stok', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload () {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
            return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
            return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
            return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM stok WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE stok SET
                nama = '$nama',
                deskripsi = '$deskripsi',
                stok = '$stok',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM stok
                WHERE
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            stok LIKE '%$keyword%'
        ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 =  mysqli_real_escape_string($conn, $data["password2"]);
    $role = mysqli_real_escape_string($conn, $data["role"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!')
            </script>";
            return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$role')");

    return mysqli_affected_rows($conn);
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung>0){
        // kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if($role=='admin'){
            // kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:admin');
        } else {
            // kalau bukan admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'User';
            header('location:user');
        }

    } else {
        // kalau tidak ditemukan

        echo 'Data tidak ditemukan';
    }
};

// if(isset($_POST['submit'])){
//     $nama = $_POST['nama'];
//     $deskripsi = $_POST['deskripsi'];
//     $stok = $_POST['stok'];
//     $gambar = $_POST['gambar'];

//     $addnewbarang = mysqli_query($conn, "INSERT INTO stok (nama,deskripsi,stok,gambar) VALUES ('$nama','$deskripsi','$stok', '$gambar')");

//     if($addnewbarang){
//         header('location:admin');
//     } else {
//         header('location:admin');
//     }
// }
?>