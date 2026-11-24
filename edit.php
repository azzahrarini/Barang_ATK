<?php

require_once 'config/koneksi.php';
require_once 'classes/BarangATK.php';

$koneksi = new Koneksi();
$barang = new BarangATK($koneksi);

$id = (int) $_GET['id'];

if (isset($_POST['update'])) {
    $barang->editData(
        $id,
        $_POST['kode'],
        $_POST['nama'],
        $_POST['kategori'],
        $_POST['harga'],
        $_POST['stok']
    );

    header("Location: index.php");
    exit;
}

$data = $barang->ambilData($id);
?>

<h2>Edit Barang</h2>

<form method="POST">
    Kode: <input type="text" name="kode" value="<?= htmlspecialchars($data['kode_barang']); ?>" required><br><br>
    Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama_barang']); ?>" required><br><br>
    Kategori: <input type="text" name="kategori" value="<?= htmlspecialchars($data['kategori']); ?>" required><br><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br><br>
    Stok: <input type="number" name="stok" value="<?= $data['stok']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>