<?php

require_once 'config/koneksi.php';
require_once 'classes/BarangATK.php';

$koneksi = new Koneksi();
$barang = new BarangATK($koneksi);

if (isset($_GET['id'])) {
    $barang->hapusData((int) $_GET['id']);
}

header("Location: index.php");
exit;