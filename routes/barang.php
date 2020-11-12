<?php 
require_once('../config/db.php');
require_once('../controllers/Barang.php');

$connect = connect();

if($_GET['add']){

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $success = addBarang($connect, $nama, $harga);
    if($success) {
        header("Location: ../barang.php?status=success&message=Barang berhasil ditambahkan");
    } else {
        header("Location: ../add-barang.php?status=warning&message=Barang gagal ditambahkan");
    }
}

if($_GET['edit']){

    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $harga  = $_POST['harga'];

    $success = editBarang($connect, $id, $nama, $harga);
    if($success) {
        header("Location: ../barang.php?status=success&message=Barang berhasil diedit");
    } else {
        header("Location: ../barang.php?status=warning&message=Barang gagal diedit");
    }
}

if($_GET['delete']){

    $id = $_GET['id'];

    $success = deleteBarang($connect, $id);
    if($success) {
        header("Location: ../barang.php?status=success&message=Barang berhasil dihapus");
    } else {
        header("Location: ../barang.php?status=warning&message=Barang berhasil dihapus");
    }
}

?>