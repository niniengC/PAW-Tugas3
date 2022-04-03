<!DOCTYPE html>
<html>
    <head>
        <title>Entry Data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        
        <header>
            <h3 class="text-center">Entry Data Buku Baru</h3>
        </header>
        </br>

        <form action="insert.php" method="POST">
            <div class="row">
                <label for="ISBN">ISBN : </label>
                <input type="number" name="ISBN" class="form-control" />
            </div>
            <div class="mb-3 mt-3">
                <label for="judul_buku">Judul Buku : </label>
                <input type="text" name="judul_buku" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="pengarang">Pengarang : </label>
                <input type="text" name="pengarang" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="tanggal_terbit">Tanggal Terbit : </label>
                <input type="date" name="tanggal_terbit" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="tebal_halaman">Tebal Halaman : </label>
                <input type="number" name="tebal_halaman" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="panjang_buku">Panjang Buku : </label>
                <input type="number" name="panjang_buku" placeholder="Dalam Satuan Cm" step = "any" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="lebar_buku">Lebar Buku : </label>
                <input type="number" name="lebar_buku" placeholder="Dalam Satuan Cm" step = "any" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="berat_buku">Berat Buku : </label>
                <input type="number" name="berat_buku" placeholder="Dalam Satuan Kg" step = "any" class="form-control"/>
            </div>
            <div class="mb-3 mt-3">
                <label for="harga_buku">Harga Buku : </label>
                <input type="number" name="harga_buku" placeholder="Dalam Rupiah" class="form-control"/>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark" class="text-center">Tambahkan</button>
            </div>
        </form>
    </body>
</html>