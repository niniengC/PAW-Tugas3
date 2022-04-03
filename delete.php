<?php

include("config.php");

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tbl_094 WHERE id=$id";
    $hasil = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if (!$hasil ) {
    echo "Eksekusi delete data buku gagal";
    } else {
    echo "Eksekusi delete data buku berhasil"."</br>";
    echo "<button><a href='dataBuku.php'> Show Data </a></button>";
    }
?>