<?php

include "../koneksi/koneksi.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");

$selek = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

    if($row >= 1){

        if($selek["role"]=="admin"){
            session_start();
            $_SESSION['nama'] = $selek['username'];
            $_SESSION['role'] = $selek['role'];
            header("location:../dasboard/");
        }else if($selek["role"]=="pegawai"){
            session_start();
            $_SESSION['nama'] = $selek['username'];
            $_SESSION['role'] = $selek['role'];
            header("location:../dasboard/");
        }
    }else{
        
        echo "
        <script>
            window.location.href='index.php';
            alert('Username atau Password Salah!!');
        </script>";
        
    }

?>