<?php 
require_once('../config/db.php');
require_once('../controllers/Pelanggan.php');

$connect = connect();

if($_GET['add']){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $success = addPelanggan($connect, $nama, $alamat);
    if($success) {
        header("Location: ../pelanggan.php");
    } else {
        header("Location: ../add-pelanggan.php");
    }
}

if($_GET['edit']){

    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat  = $_POST['alamat'];

    $success = editPelanggan($connect, $id, $nama, $alamat);
    if($success) {
        header("Location: ../pelanggan.php");
    } else {
        header("Location: ../");
    }
}

if($_GET['delete']){

    $id = $_GET['id'];

    $success = deletePelanggan($connect, $id);
    if($success) {
        header("Location: ../pelanggan.php");
    } else {
        header("Location: ../");
    }
}

?>