<?php

include "../../koneksi/koneksi.php";


$id = htmlspecialchars($_POST['id']);
$hargabaru = htmlspecialchars($_POST['harga']);
$hargalama = htmlspecialchars($_POST['hargalama']);
$tgl = htmlspecialchars($_POST['tgll']);
$pengubah =  htmlspecialchars($_POST['pengubah']) ;

$data = mysqli_query($koneksi, "UPDATE `pangan` SET `harga_lama`='$hargalama', `harga_baru`='$hargabaru', `tanggal`='$tgl', `pengubah`='$pengubah' WHERE `pangan`.`id`='$id'");

<<<<<<< HEAD

session_start();
$_SESSION['alert'] = "success";
$_SESSION['pesan'] = "Data Berhasil diedit";
echo "<script>window.location.href='../hlmpangan.php';</script>";
=======
echo "<script>window.location.href='../hlmpangan.php';alert('Data Berhasil diedit')</script>";
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5

?>