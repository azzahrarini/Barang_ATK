<?php

require_once 'config/koneksi.php';
require_once 'classes/BarangATK.php';

$koneksi = new Koneksi();
$barang = new BarangATK($koneksi);

if (isset($_POST['simpan'])) {
    $barang->tambahData(
        $_POST['kode'],
        $_POST['nama'],
        $_POST['kategori'],
        $_POST['harga'],
        $_POST['stok']
    );

    header("Location: index.php");
    exit;
}
?>

<h2>Tambah Barang</h2>

<form method="POST">
    Kode: <input type="text" name="kode" required><br><br>
    Nama: <input type="text" name="nama" required><br><br>
    Kategori: <input type="text" name="kategori" required><br><br>
    Harga: <input type="number" name="harga" required><br><br>
    Stok: <input type="number" name="stok" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>