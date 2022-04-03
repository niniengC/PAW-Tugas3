<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<header>
        <h3 class="text-center">Data Buku</h3>
    </header>

    <nav>
        <a href="form.php"><button type="button" class="btn btn-dark"> Tambah Data Buku Baru</button></a>
    </nav>
    <br>
	<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>ISBN</th>
            <th>JUDUL BUKU</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>TANGGAL TERBIT</th>
            <th>TEBAL HALAMAN</th>
            <th>PANJANG BUKU (CM)</th>
            <th>LEBAR BUKU (CM)</th>
            <th>BERAT BUKU (KG)</th>
            <th>HARGA BUKU (RP)</th>
            <th>OPSI</th>
        </tr>
    </thead>
    <tbody>

        <?php
        	include "config.php";
	        $sql = "SELECT * FROM tbl_094";
	        $hasil = mysqli_query($koneksi, $sql);

	        while($buku = mysqli_fetch_array($hasil)){
	            echo "<tr>";
	            
	            echo "<td>".$buku['id']."</td>";
	            echo "<td>".$buku['ISBN']."</td>";
	            echo "<td>".$buku['judul_buku']."</td>";
	            echo "<td>".$buku['pengarang']."</td>";
	            echo "<td>".$buku['penerbit']."</td>";
	            echo "<td>".$buku['tanggal_terbit']."</td>";
	            echo "<td>".$buku['tebal_halaman']."</td>";
	            echo "<td>".$buku['panjang_buku']."</td>";
	            echo "<td>".$buku['lebar_buku']."</td>";
	            echo "<td>".$buku['berat_buku']."</td>";
	            echo "<td>".$buku['harga_buku']."</td>";


	            echo "<td>";
	            echo "<a href='formEdit.php?id=".$buku['id']."'>"
	            ?>
	            <button type="button" class="btn btn-light">Edit</button></a>
	            <?php
	            echo "<a href='delete.php?id=".$buku['id']."'>"
	            ?>
	            <button type="button" class="btn btn-light">Delete</button></a>
	            <?php
	            echo "</td>";

	            echo "</tr>";
	        }
        		?>

    </tbody>
    </table>
</body>
</html>
