<?php

require_once 'config/koneksi.php';
require_once 'classes/BarangATK.php';

$koneksi = new Koneksi();
$barang = new BarangATK($koneksi);

$data = $barang->tampilkanData();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang ATK</title>
</head>
<body>

<h2>Data Barang ATK</h2>

<a href="tambah.php">Tambah Barang</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['kode_barang']; ?></td>
        <td><?= $row['nama_barang']; ?></td>
        <td><?= $row['kategori']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
            <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>