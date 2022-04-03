<?php

include("config.php");

// ambil data dari formulir
$ISBN = $_POST['ISBN'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tanggal_terbit = $_POST['tanggal_terbit'];
$tebal_halaman = $_POST['tebal_halaman'];
$panjang_buku = $_POST['panjang_buku'];
$lebar_buku = $_POST['lebar_buku'];
$berat_buku = $_POST['berat_buku'];
$harga_buku = $_POST['harga_buku'];
    

// buat query
$sql = "INSERT INTO tbl_094 VALUES (null, '$ISBN', '$judul_buku', '$pengarang', '$penerbit', '$tanggal_terbit', '$tebal_halaman', '$panjang_buku', '$lebar_buku', '$berat_buku', '$harga_buku')";
$hasil = mysqli_query($koneksi, $sql);

// apakah query simpan berhasil?
if (!$hasil ) {
    echo "Eksekusi tambah data buku gagal";
    } else {
    echo "Eksekusi tambah data buku berhasil"."</br>";
    echo "<button><a href='dataBuku.php'> Show Data </a></button>";
    }
?>