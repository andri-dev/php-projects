<?php 
require_once('../config/db.php');
require_once('../controllers/Penjualan.php');

$connect = connect();

if($_GET['add']){

    $no         = $_POST['no'];
    $tanggal    = $_POST['tanggal'];

    $success = addPenjualan($connect, $no, $tanggal);
    if($success) {
        header("Location: ../penjualan.php?status=success&message=Penjualan berhasil ditambahkan");
    } else {
        header("Location: ../add-penjualan.php?status=warning&message=Penjualan gagal ditambahkan");
    }
}

if($_GET['edit']){

    $id     = $_POST['id'];
    $no         = $_POST['no'];
    $tanggal    = $_POST['tanggal'];

    $success = editPenjualan($connect, $id, $no, $tanggal);
    if($success) {
        header("Location: ../penjualan.php?status=success&message=Penjualan berhasil diedit");
    } else {
        header("Location: ../penjualan.php?status=warning&message=Penjualan gagal diedit");
    }
}

if($_GET['delete']){

    $id = $_GET['id'];

    $success = deletePenjualan($connect, $id);
    if($success) {
        header("Location: ../penjualan.php?status=success&message=Penjualan berhasil dihapus");
    } else {
        header("Location: ../penjualan.php?status=success&message=Penjualan gagal dihapus");
    }
}

?>