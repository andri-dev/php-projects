<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <br>
    <form action="./proses/add-barang.php" method="post">
        Nama : <input type="text" name="nama"><br>
        Kategori : <input type="text" name="kategori"><br>
        Harga : <input type="text" name="harga"><br>
        Stok : <input type="text" name="stok"><br>
        Nama Suplier : <input type="text" name="nama-suplier"><br>
        <a href="./index.php">Kembali</a><input type="submit" value="Tambah Data">
    </form>
</body>
</html>