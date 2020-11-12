<?php 

function getAllBarang($connect) {
    $query = mysqli_query($connect, "SELECT * FROM barang");
    return $query;
}

function getBarang($connect, $id) {
    $query = mysqli_query($connect, "SELECT * FROM barang WHERE kodebarang='$id'");
    return $query;
}

// Data masukan kedalam parameter
function addBarang($connect, $nama, $harga) {
    $query = mysqli_query($connect, "INSERT INTO barang (namabarang, hargabarang) VALUES ('$nama','$harga')");
    return $query;
}

// Data masukan kedalam ke2 - kN parameter
function editBarang($connect, $id, $nama, $harga) {
    $value = "namabarang='".$nama."',hargabarang='".$harga."'";

    $query = mysqli_query($connect, "UPDATE barang SET ".$value."WHERE kodebarang='$id'");
    return $query;
}

function deleteBarang($connect, $id) {
    $query = mysqli_query($connect, "DELETE FROM barang WHERE kodebarang='$id'");
    return $query;
}

?>