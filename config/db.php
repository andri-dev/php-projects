<?php 

function connect() {
    $host       = '127.0.0.1';
    $username   = 'root';
    $password   = '';
    $database   = 'penjualanbarang';

    $connect = mysqli_connect($host, $username, $password, $database)
    or die(mysqli_connect_error());
    return $connect;
}

?>