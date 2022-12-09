<?php 

include "../koneksi/koneksi.php";
include "include/head.php";

$data = mysqli_query($koneksi, "SELECT * FROM user");
$data2 = mysqli_query($koneksi, "SELECT * FROM pangan");
$jumlahuser = mysqli_num_rows($data);
$jumlahpangan = mysqli_num_rows($data2);

?>
 
 <!-- Mulai Content -->


    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
            </li>
            </ol>
        </nav>
        </div>


    </div>
    <!--end breadcrumb-->


 <!-- Row -->
 <div class="row">
	<hr>

            <div class="col-lg-3 col-sm-6">
              <div class="card radius-10 bg-info">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1 text-white">Bahan Pangan</p>
                      <h4 class="mb-0 text-white"><?php echo $jumlahpangan;?></h4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                      <ion-icon name="leaf-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>
     

            <div class="col-lg-3 col-sm-6">
              <div class="card radius-10 bg-success">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1 text-white">User</p>
                      <h4 class="mb-0 text-white"><?php echo $jumlahuser; ?></h4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                      <ion-icon name="accessibility-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
 </div>
<!-- Akhir Row -->


 <!-- Akhir Content -->

<?php

include "include/footer.php";


?>