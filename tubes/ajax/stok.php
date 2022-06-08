<?php 
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM stok
            WHERE
            nama LIKE '%$keyword%' OR
            sistemoperasi LIKE '%$keyword%' OR
            processor LIKE '%$keyword%' OR
            warna LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            stok LIKE '%$keyword%'
            ";

$stok = query($query);

?>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Sistem Operasi</th>
        <th>Processor</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $stok as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
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