<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
</head>
<body>
    <?php 
    require_once('./config/db.php');

    $koneksi = connect();
    $id = $_GET['id'];

    if(!$id){
        header("Location: ./");
    }

    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <h1>Update Barang</h1>
    <br>
    <form action="./proses/edit-barang.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        Nama : <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
        Kategori : <input type="text" name="kategori" value="<?= $data['kategori']; ?>"><br>
        Harga : <input type="text" name="harga" value="<?= $data['harga']; ?>"><br>
        Stok : <input type="text" name="stok" value="<?= $data['stok']; ?>"><br>
        Nama Suplier : <input type="text" name="nama-suplier" value="<?= $data['namaSuplier']; ?>"><br>
        <a href="./index.php">Kembali</a><input type="submit" value="Update Data">
    </form>
</body>
</html>