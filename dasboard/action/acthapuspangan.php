<?php 

include "../../koneksi/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `pangan` WHERE `pangan`.`id` = '$id'");

<<<<<<< HEAD


        session_start();
        $_SESSION['alert'] = "success";
        $_SESSION['pesan'] = "Data Berhasil dihapus";

=======
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5
echo "
        <script>
            window.location.href='../hlmpangan.php';
        </script>";


?>