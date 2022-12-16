<?php 

include "../../koneksi/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `pangan` WHERE `pangan`.`id` = '$id'");

echo "
        <script>
            window.location.href='../hlmpangan.php';
        </script>";


?>