<?php 

function getAllPelanggan($connect) {
    $query = mysqli_query($connect, "SELECT * FROM pelanggan");
    return $query;
}

function getPelanggan($connect, $id) {
    $query = mysqli_query($connect, "SELECT * FROM pelanggan WHERE nopelanggan='$id'");
    return $query;
}

// Data masukan kedalam parameter
function addPelanggan($connect, $nama, $alamat) {
    $query = mysqli_query($connect, "INSERT INTO pelanggan (namapelanggan, alamat) VALUES ('$nama','$alamat')");
    return $query;
}

// Data masukan kedalam ke2 - kN parameter
function editPelanggan($connect, $id, $nama, $alamat) {
    $value = "namapelanggan='".$nama."',alamat='".$alamat."'";

    $query = mysqli_query($connect, "UPDATE pelanggan SET ".$value."WHERE nopelanggan='$id'");
    return $query;
}

function deletePelanggan($connect, $id) {
    $query = mysqli_query($connect, "DELETE FROM pelanggan WHERE nopelanggan='$id'");
    return $query;
}

?>