<?php
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string
// Array numerik yang key nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [

    [
        "nama" => "Vina Nur Fauziah",
        "npm"=> "213040115", 
        "email" => "vinaanurfauziah@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama"=>"Rika Febriyanti", 
        "npm"=>"213040125", 
        "email"=>"rikafebriyanti@gmail.com", 
        "jurusan"=>"Teknik Informatika"
    ],
    [
        "nama"=>"Yudha Yudhistira",  
        "email"=>"yudhistirayudha09@gmail.com", 
        "npm"=>"213040124",
        "jurusan"=>"Teknik Informatika"]
];
// var_dump($mahasiswa[2]["nama"]);
?>
<!-- // alt atas
// blok alt shift bawah
// ctrl d kutip
// shift tab ke kanan,  -->


<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs ["nama"]; ?></li>
        <li>NPM: <?php echo $mhs ["npm"]; ?></li>
        <li>Email: <?php echo $mhs ["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs ["jurusan"]; ?></li>
    <ul>
<?php }?>
