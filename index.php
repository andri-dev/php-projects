<?php 

require_once('./config/db.php');

$koneksi = connect();

if($koneksi){
    echo '<script> alert("Database berhasil terkoneksi"); </script>';
    echo 'Selamat malam';
}

?>