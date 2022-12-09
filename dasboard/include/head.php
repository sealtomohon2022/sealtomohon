
<?php

session_start();

if(!isset($_SESSION['nama'])){
  echo "
  <script>
    alert('Harus Login terlebih dahulu!!'); 
    window.location.href='../login/'; 
    
  </script>";
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
    <link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Dashboard</title>
  </head>

  



  <body>


    

 <!--start wrapper-->
    <div class="wrapper">
       
       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img src="../assets/images/logo-tomohon.png" class="logo-icon" alt="logo icon">
          </div>
          <div>
            <h4 class="logo-text text-success">SIDP</h4>
          </div>
          <div class="toggle-icon text-success ms-auto"><ion-icon name="menu-sharp"></ion-icon>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="index.php">
              <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

          <li>
            <a href="hlmpangan.php">
              <div class="parent-icon"><ion-icon name="documents"></ion-icon>
              </div>
              <div class="menu-title">Daftar Pangan</div>
            </a>
          </li>

          <li>
            <a href="hlmpegawai.php">
              <div class="parent-icon"><ion-icon name="people"></ion-icon>
              </div>
              <div class="menu-title">Pegawai</div>
            </a>
          </li>

        </ul>
        <!--end navigation-->
     </aside>
     <!--end sidebar -->

        <!--start top header-->
          <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
              <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
              <!-- <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control" type="text" placeholder="Search for anything">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
             </form> -->
             <div class="top-navbar-right ms-auto">

              <ul class="navbar-nav align-items-center">
                <!-- <li class="nav-item mobile-search-button ">
                  <a class="nav-link" href="javascript:;">
                    <div class="">
                      <ion-icon name="search-sharp"></ion-icon>
                    </div>
                  </a>
                </li> -->
                
        
                <li class="nav-item dropdown dropdown-user-setting">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="user-setting">
                      <img src="../assets/images/avatar/siluet1.png" class="user-img" alt="">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                       <a class="dropdown-item" href="javascript:;">
                         <div class="d-flex flex-row align-items-center gap-2">
                            <img src="../assets/images/avatar/siluet1.png" alt="" class="rounded-circle" width="54" height="54">
                            <div class="">
                              <h6 class="mb-0 dropdown-user-name">Edoedo</h6>
                              <small class="mb-0 dropdown-user-designation text-secondary">Administrator</small>
                            </div>
                         </div>
                       </a>
                     </li>
                     <li><hr class="dropdown-divider"></li>
                     <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="person-outline"></ion-icon></div>
                             <div class="ms-3"><span>Profile</span></div>
                           </div>
                         </a>
                      </li>
                      
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="include/logout.php">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                             <div class="ms-3"><span>Logout</span></div>
                           </div>
                         </a>
                      </li>
                  </ul>
                </li>

               </ul>

              </div>
            </nav>
          </header>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
          <div class="page-content">

              
