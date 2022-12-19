<?php

include "koneksi/koneksi.php";


?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link href="assets/images/logo-tomohon.png" rel="icon">



  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Sistem Informasi Dinas Pangan</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">


    <!-- mulai navbar -->
    <nav class="navbar navbar-expand-lg text-center shadow-sm" style="background-color: white;">
      <div class="container p-2">
        <a class="navbar-brand ms-lg-4 ms-sm-3" href="#">
          <img src="assets/images/logo-tomohon.png" width="60" height="60">
        </a>
        <a class="navbar-brand text-dark me-sm-3 " href="#">
          Sistem Informasi Dinas Pangan
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg></span>
                    </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav  ms-auto">
            <li class="nav-item me-3">

              <!-- <a class="nav-link text-dark" aria-current="page" href="#">
                        <div class="tab-icon"><ion-icon name="home-sharp" class="me-1"></ion-icon> Home
                        </div>
                        </a>
                        </li> -->
            <li class="nav-item">
              <a class="nav-link text-white active m-2 bg-gradient-success radius-10 p-3 " href="login/"> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- mulai slideshow -->
    <div class="slideshow">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators" style="transform: translateY(-200px);">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/products/1.jpg" width="100%" height="500px" style="transform: translateY(-200px);">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/products/15.jpg" width="100%" height="500px" style="transform: translateY(-200px);">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/products/13.jpg" width="100%" height="500px" style="transform: translateY(-200px);">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="transform: translateY(-100px);">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="transform: translateY(-100px);">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    <!-- akhir slideshow -->

    <!-- mulai content -->
    <div class="container mt-5">

      <div class="text-center mb-4 fs-3">
        HARGA BAHAN PANGAN KOTA TOMOHON
      </div>
      <!-- search -->
      <div class="card bg-gradient-success p-3 radius-10">
        <div class="card-body d-flex justify-content-center ">
          <form class="searchbar" action="">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
              <ion-icon name="search-sharp"></ion-icon>
            </div>
            <input class="form-control text-center" type="text" placeholder="Cari nama bahan pangan" autocomplete="off" id="key">
          </form>
        </div>
      </div>
      <!-- akhir search -->


      <!-- produk -->

      <div class="row" id="forsearch">


        <?php

        $data = mysqli_query($koneksi, "SELECT * FROM pangan");



        foreach ($data as $d) {


          $hargalama =  $d['harga_lama'];
          $hargabaru =  $d['harga_baru'];
          $status = "";

          if ($hargalama > 0) {
            $persenn = ($hargabaru / $hargalama) * 100;
            $persen = $persenn - 100;
          }


          if ($hargalama == 0) {
            $status = "None";
          } else if ($hargalama == $hargabaru) {
            $status = "Stabil";
          } else if ($hargalama <= $hargabaru) {
            $status = "Naik";
          } else if ($hargalama >= $hargabaru) {
            $status = "Turun";
          }



        ?>


          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card radius-10">
              <div class="card-body">
                <img src="assets/images/pangan/<?php echo $d['nama_gambar']; ?>" class="imgpro radius-10" width="324" height="243">
                <div class=" mt-3">
                  <h3 class="card-title text-center"><?php echo $d['nama_pangan']; ?></h3>
                  <div class="row">


                    <?php if ($hargalama == 0) {
                    ?>
                      <div class="col-11  text-center" style="transform: translateX(15px);">
                        <span style="color: transparent;"> test</span><br>
                        <label class="fs-4">Harga Terkini</label>
                        <p class="fs-5">Rp.
                          <?php echo number_format($d['harga_baru']);
                          ?>
                        </p>
                      </div>

                      <div class="col-1">
                      <?php
                    } else {

                      ?>
                        <div class="col-8">
                          <label class="font-harga">Harga Sebelum</label>
                          Rp.<?php echo number_format($d['harga_lama']); ?><br>
                          <label class="fs-4">Harga Terkini</label>
                          <p class="fs-5">Rp.
                            <?php echo number_format($d['harga_baru']);
                            ?>
                          </p>
                        </div>

                        <div class="col-4" style="transform: translateX(15px);">
                        <?php
                      }
                        ?>






                        <?php




                        if ($status == "None") {
                        ?>

                          <div class="text-end fs-3 me-5 mb-0 text-dark" style="transform:translateY(10px) translateX(-5px) ;">
                            <ion-icon name=""></ion-icon>
                          </div>
                          <p class="text-end me-3" style="color: transparent;"> d </p>



                        <?php
                        } else if ($status == "Turun") {


                        ?>

                          <div class="text-end fs-3 me-5 mb-0 text-success" style="transform:translateY(10px)translateX(-5px) ;">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                          </div>

                          <p class="text-end me-5 text-success mt-2"> <?= number_format($persen); ?> %</p>


                        <?php

                        } else if ($status == "Naik") {

                        ?>


                          <div class="text-end fs-3 me-5 mb-0 text-danger" style="transform:translateY(10px);">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                          </div>

                          <p class="text-end me-5 text-danger mt-2"> <?= number_format($persen); ?> %</p>


                        <?php

                        } else if ($status == "Stabil") {
                        ?>

                          <div class="text-end fs-3 me-5 mb-0 text-dark" style="transform:translateY(10px) translateX(-5px) ;">
                            <ion-icon name="reorder-two-outline"></ion-icon>
                          </div>
                          <p class="text-end me-5 mt-2"><?= $status; ?></p>


                        <?php



                        }


                        ?>


                        </div>

                      </div>


                      <!-- <a href="#" class="btn bg-gradient-success px-4 radius-10 text-white">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>

          <?php

        }

          ?>



          </div>
          <!--end row-->

          <!-- akhir produk -->

      </div>
      <!-- akhir content -->



      <!-- footer -->
      <div class="footerr-top">

        <div class="container text-light">
          <div class="row">
            <div class="col-lg-3 col-md-6 mt-5  ">
              <h3>KONTAK KAMI</h3>
              <p>
                Jl. Sawangan, Lansot <br />
                Kec. Tomohon Selatan<br />
                Kota Tomohon, Sulawesi Utara <br /><br />
                <strong>Phone : </strong> - <br />
                <strong>Email : </strong> - <br />
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="footerr"><br>
        <div class="container text-light">
          &copy 2022 Kelompok SEAL Tomohon
        </div>
      </div>

      <!-- akhir footer -->


    </div>
    <!--end wrapper-->



    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top bg-gradient-success">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->



    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/js/index.js"></script>
    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/livesearch.js"></script>

</body>

</html>