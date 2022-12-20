<?php

include "../koneksi/koneksi.php";

$key = $_GET['key'];

$data = mysqli_query($koneksi, "SELECT * FROM pangan WHERE nama_pangan LIKE '%$key%' ");



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
                  <p class="text-end me-5"> <?= $status; ?></p>

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

};
