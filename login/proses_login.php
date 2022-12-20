<?php

include "../koneksi/koneksi.php";
session_start();


$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");

$selek = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

if ($row >= 1) {

    if ($selek["role"] == "admin") {
        $_SESSION['status'] = "Sukses";
        $_SESSION['nama'] = $selek['nama'];
        $_SESSION['role'] = $selek['role'];
        header("location:../dasboard/");
    } else if ($selek["role"] == "pegawai") {
        $_SESSION['status'] = "Sukses";
        $_SESSION['nama'] = $selek['nama'];
        $_SESSION['role'] = $selek['role'];
        header("location:../dasboard/");
    }
} else {

    $_SESSION['status'] = "Gagal";


    echo "
        <script>
            window.location.href='index.php';
        </script>";
}
