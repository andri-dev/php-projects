<?php 

require_once('./config/db.php');

$koneksi = connect();
$query = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/confirm.js"></script>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="./tambah-barang.php">Tambah Barang</a>
    <hr>
    <ul>
        <?php 
        while ($data = mysqli_fetch_array($query)) {
            echo "<li>Nama : ".$data['nama']."</li>";
            echo "<li>Kategori : ".$data['kategori']."</li>";
            echo "<li>Harga : ".$data['harga']."</li>";
            echo "<li>Stok : ".$data['stok']."</li>";
            echo "<li>Nama Suplier : ".$data['namaSuplier']."</li>";
            echo '<li><a href="update-barang.php?id='.$data['id'].'">Update</a></li>';
            echo '<li><a href="#" onclick="confirmDeleteBarang('.$data['id'].')">Delete</a></li><br><hr><br>';
        }
        ?>
</body>
</html>