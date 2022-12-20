<?php

include "../koneksi/koneksi.php";
session_start();


$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");

$selek = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

    if($row >= 1){

        if($selek["role"]=="admin"){
<<<<<<< HEAD
            $_SESSION['status'] = "Sukses";
=======
            session_start();
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5
            $_SESSION['nama'] = $selek['nama'];
            $_SESSION['role'] = $selek['role'];
            header("location:../dasboard/");
        }else if($selek["role"]=="pegawai"){
<<<<<<< HEAD
            $_SESSION['status'] = "Sukses";
=======
            session_start();
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5
            $_SESSION['nama'] = $selek['nama'];
            $_SESSION['role'] = $selek['role'];
            header("location:../dasboard/");
        }
    }else{
        
        $_SESSION['status'] = "Gagal";


        echo "
        <script>
            window.location.href='index.php';
        </script>";
        
    }
