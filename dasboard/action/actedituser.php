<?php

include "../../koneksi/koneksi.php";

$id = htmlspecialchars($_POST['id']);
$nama = htmlspecialchars($_POST['nama']);
$posisi = htmlspecialchars($_POST['posisi']);
$alamat = htmlspecialchars($_POST['alamat']);
$nohp = htmlspecialchars($_POST['nohp']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$role = htmlspecialchars($_POST['role']);

$data = mysqli_query($koneksi, "UPDATE `user` SET `nama`='$nama', `posisi`='$posisi', `alamat`='$alamat', `no_hp`='$nohp', `username`='$username', `password`='$password', `role`='$role' WHERE `user`.`id`='$id'");

echo "<script>window.location.href='../hlmpegawai.php';alert('Data Berhasil diedit')</script>";




?>