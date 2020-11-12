<?php 

function getAllPenjualan($connect) {
    $query = mysqli_query($connect, "SELECT * FROM penjualan");
    return $query;
}

function getPenjualan($connect, $id) {
    $query = mysqli_query($connect, "SELECT * FROM penjualan WHERE faktur='$id'");
    return $query;
}

// Data masukan kedalam parameter
function addPenjualan($connect, $nopelanggan, $tanggal) {
    $query = mysqli_query($connect, "INSERT INTO penjualan (nopelanggan, tanggalpenjualan) VALUES ('$nopelanggan','$tanggal')");
    return $query;
}

// Data masukan kedalam ke2 - kN parameter
function editPenjualan($connect, $id, $nopelanggan, $tanggal) {
    $value = "nopelanggan='".$nopelanggan."',tanggalpenjualan='".$tanggal."'";

    $query = mysqli_query($connect, "UPDATE penjualan SET ".$value."WHERE faktur='$id'");
    return $query;
}

function deletePenjualan($connect, $id) {
    $query = mysqli_query($connect, "DELETE FROM penjualan WHERE faktur='$id'");
    return $query;
}

?>