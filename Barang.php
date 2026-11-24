<?php
class Barang{
    protected $kode_barang;
    protected $nama_barang;
    protected $kategori;
    protected $harga;
    protected $stok;

public function __construct($kode, $nama, $kategori, $harga, $stok)
{
    $this->kode_barang = $kode;
    $this->nama_barang = $nama;
    $this->kategori = $harga;
    $this->harga = $harga;
    $this->stok = $stok;
}
}