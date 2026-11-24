<?php

require_once __DIR__ . '/Barang.php';
require_once __DIR__ . '/../config/koneksi.php';

class BarangATK extends Barang {

    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi->getConnection();
    }

    public function tampilkanData() {
        $sql = "SELECT * FROM barang";
        return $this->db->query($sql);
    }

    public function tambahData($kode, $nama, $kategori, $harga, $stok) {
        $sql = "INSERT INTO barang
        (kode_barang, nama_barang, kategori, harga, stok)
        VALUES ('$kode', '$nama', '$kategori', '$harga', '$stok')";

        return $this->db->query($sql);
    }

    public function hapusData($id) {
        $sql = "DELETE FROM barang WHERE id = $id";
        return $this->db->query($sql);
    }

    public function ambilData($id) {
    $sql = "SELECT * FROM barang WHERE id = $id";
    $hasil = $this->db->query($sql);

    return $hasil->fetch_assoc();
}

    public function editData($id, $kode, $nama, $kategori, $harga, $stok) {
        $sql = "UPDATE barang SET
                kode_barang = '$kode',
                nama_barang = '$nama',
                kategori = '$kategori',
                harga = '$harga',
                stok = '$stok'
                WHERE id = $id";

        return $this->db->query($sql);
    }
}