<?php 
require_once('../config/db.php');
require_once('../controllers/Pelanggan.php');

$connect = connect();

if($_GET['add']){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $success = addPelanggan($connect, $nama, $alamat);
    if($success) {
        header("Location: ../pelanggan.php?status=success&message=Pelanggan berhasil ditambahkan");
    } else {
        header("Location: ../add-pelanggan.php?status=warning&message=Pelanggan gagal ditambahkan");
    }
}

if($_GET['edit']){

    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat  = $_POST['alamat'];

    $success = editPelanggan($connect, $id, $nama, $alamat);
    if($success) {
        header("Location: ../pelanggan.php?status=success&message=Pelanggan berhasil diedit");
    } else {
        header("Location: ../pelanggan.php?status=warning&message=Pelanggan gagal diedit");
    }
}

if($_GET['delete']){

    $id = $_GET['id'];

    $success = deletePelanggan($connect, $id);
    if($success) {
        header("Location: ../pelanggan.php?status=success&message=Pelanggan berhasil dihapus");
    } else {
        header("Location: ../pelanggan.php?status=warning&message=Pelanggan gagal dihapus");
    }
}

?>