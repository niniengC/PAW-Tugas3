<?php

include "config.php";

// ambil data dari formulir
$id = $_POST['id'];
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
$sql = "UPDATE tbl_094 set ISBN = '$ISBN', judul_buku = '$judul_buku', pengarang = '$pengarang', penerbit = '$penerbit', tanggal_terbit = '$tanggal_terbit', tebal_halaman = '$tebal_halaman', panjang_buku = '$panjang_buku', lebar_buku = '$lebar_buku', berat_buku = '$berat_buku', harga_buku = '$harga_buku' WHERE id=$id";
$hasil = mysqli_query($koneksi, $sql);

// apakah query simpan berhasil?
if (!$hasil ) {
    echo "Eksekusi update data buku gagal";
    } else {
    echo "Eksekusi update data buku berhasil"."</br>";
    echo "<button><a href='dataBuku.php'> Show Data </a></button>";
    }
?>
 