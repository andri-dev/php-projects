<?php 
require_once('../config/db.php');
require_once('../controllers/Barang.php');

$connect = connect();

if($_GET['add']){

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $success = addBarang($connect, $nama, $harga);
    if($success) {
        header("Location: ../barang.php");
    } else {
        header("Location: ../add-barang.php");
    }
}

if($_GET['edit']){

    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $harga  = $_POST['harga'];

    $success = editBarang($connect, $id, $nama, $harga);
    if($success) {
        header("Location: ../barang.php");
    } else {
        header("Location: ../");
    }
}

if($_GET['delete']){

    $id = $_GET['id'];

    $success = deleteBarang($connect, $id);
    if($success) {
        header("Location: ../barang.php");
    } else {
        header("Location: ../");
    }
}

?>