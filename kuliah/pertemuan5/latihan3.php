<?php
// Representasi Data Mahasiswa

$mahasiswa = [
    ["Vina Nur Fauziah", "213040115", "vinaanurfauziah@gmail.com", "Teknik Informatika"],
    ["Rika Febriyanti", "213040125", "rikafebriyanti@gmail.com", "Teknik Informatika"],
    ["Yudha Yudhistira", "213040124", "yudhayudhistira@gmail.com", "Teknik Informatika"]
];

print_r($mahasiswa);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs [0]; ?></li>
        <li>NPM: <?php echo $mhs [1]; ?></li>
        <li>Email: <?php echo $mhs [2]; ?></li>
        <li>Jurusan: <?php echo $mhs [3]; ?></li>
    <ul>
<?php } ?>

<!-- array asosiatif -->