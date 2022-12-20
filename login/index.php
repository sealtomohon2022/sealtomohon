<?php

session_start();

if(isset($_SESSION['nama'])){
    header("Location: ../dasboard/ ");
  }


?>

<!doctype html>
<html lang="en" class="light-theme">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon  -->
        <link href="../assets/images/logo-tomohon.png" rel="icon">

    

        <!--plugins-->
        <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <title>Sistem Informasi Dinas Pangan</title>
    </head>
    <body>

        <!--start wrapper-->
        <div class="wrapper">


            <!-- mulai navbar -->
            <nav class="navbar navbar-expand-lg text-center shadow-sm rounded" style="background-color: white;">
                <div class="container p-2">
                    <a class="navbar-brand" href="#">
                      <img src="../assets/images/logo-tomohon.png" width="60" height="60" >
                    </a>
                    <a class="navbar-brand text-dark " href="#">
                      Sistem Informasi Dinas Pangan
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav  ms-auto">
                        <!-- <li class="nav-item me-3">

                        <a class="nav-link text-dark" aria-current="page" href="#">
                        <div class="tab-icon"><ion-icon name="home-sharp" class="me-1"></ion-icon> Home
                        </div>
                        </a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link text-white active m-2 bg-gradient-success radius-10 p-3 " href="../"> Beranda</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            <!-- akhir navbar -->   

<br><br>
            <!--  mulai login -->


            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                        <div class="text-center">
                            <h4>Sign In</h4>
                        </div>


                        <?php 
                        
                        if(isset($_SESSION['status'])){

                            ?>
                            
                            <div class="alert alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-danger"><ion-icon name="close-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-danger">Username atau Password Salah!!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                            
                            <?php
                            unset($_SESSION['status']);
                        }

                        ?>
                        
                            
                            
                          

                       

                        <form class="form-body row g-3" action="proses_login.php" method="POST">
                            <div class="col-12">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input type="text" name="user" class="form-control" id="inputUsername" placeholder="Masukan Username" autocomplete="off" required>
                            </div>
                            <div class="col-12">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Masukan Password" autocomplete="off" required>
                            </div>
                           
                            <div class="col-12 col-lg-12">
                            <div class="d-grid">
                                <button type="submit" class="btn bg-gradient-success text-white">Sign In</button>
                            </div>
                            </div>
                            
                           
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>



            <!-- akhir login -->


            <!-- footer -->

            

           <br><br><br>
              <div class="text-center m-sm-3">&copy 2022 Kelompok SEAL Tomohon</div>  
             

            <!-- akhir footer -->


        </div>
        <!--end wrapper-->



        <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top bg-gradient-success"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->



        <!-- JS Files-->
        <script src="../assets/js/jquery.min.js"></script>
        
        <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <!--plugins-->
        <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="../assets/plugins/chartjs/chart.min.js"></script>
        <script src="../assets/js/index.js"></script>
        <!-- Main JS-->
        <script src="../assets/js/main.js"></script>

    </body>
</html>