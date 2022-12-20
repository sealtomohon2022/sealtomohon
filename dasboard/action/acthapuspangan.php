<?php 

include "../../koneksi/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `pangan` WHERE `pangan`.`id` = '$id'");

        session_start();
        $_SESSION['alert'] = "success";
        $_SESSION['pesan'] = "Data Berhasil dihapus";

echo "
        <script>
            window.location.href='../hlmpangan.php';
        </script>";
