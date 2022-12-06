<?php

$koneksi = mysqli_connect("localhost", "root", "", "seal");

if (!$koneksi){
    die("Gagal Terkoneksi".mysqli_connect_error() );
}
?>
