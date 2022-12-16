<?php 

include "../koneksi/koneksi.php";
include "include/head.php";

$data = mysqli_query($koneksi, "SELECT * FROM user");


?>
 
 <!-- Mulai Content -->


    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="breadcrumb-title pe-3">Daftar Pangan</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="documents-outline"></ion-icon></a>
            </li>
            </ol>
        </nav>
        </div>


    </div>
    <!--end breadcrumb-->

 
 <!-- Row -->
 <div class="row">
		<hr/>

    <!-- tambahuser -->
    <div class="col-3 mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#formtambahpanganmodal"><ion-icon name="add"></ion-icon>Tambah Data</button>


        

        <!-- Modal -->
          <div class="modal fade" id="formtambahpanganmodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Tambah Pangan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row" action="action/acttambahpangan.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Pangan" autocomplete="off" required>
                      </div><br>
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Pangan" autocomplete="off" required>
                      </div><br>
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="file" class="form-control" required>
                        <p>Maks 3MB</p>
                      </div><br>
                </div><br><br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" name="proses" class="btn btn-success me-5">Simpan</button>
                </form>

                </div>
              </div>
            </div>
          </div>

          
    </div>
    <!-- akhir tambahuser -->

    <!-- to excel -->
    <div class="col-3">
      <a href="action/toexcel.php" class="btn btn-secondary">
        <ion-icon name="document-text-outline"></ion-icon>Ekspor ke Excel</a>
        </div>
    <!-- akhir to excel -->
    


    <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                   <h5 class="mb-0">Data Bahan Pangan</h5>
                </div>
                <div class="table-responsive mt-3">
                  <table id="dt"  class="table  table-striped table-bordered   align-middle text-center " >
                    <thead class="bg-success text-white">
                      <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Harga Sebelum</th>
                       <th>Harga Terkini</th>
                       <th>Tanggal Perubahan Harga </th>
                       <th>Status Harga</th>
                       <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM pangan");

                    

                    foreach($data as $d){

                        ?>

                        <tr>
                        <td><?php echo $no++; ?></td>
                            <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="../assets/images/pangan/<?php echo htmlspecialchars($d['nama_gambar']);?>" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                <p class="mb-0"><?php echo htmlspecialchars($d['nama_pangan']); ?></p>
                                </div>
                            </div>
                            </td>
                            <td>Rp.<?php echo number_format(htmlspecialchars($d['harga_lama']));  ?></td>
                            <td>Rp.<?php echo number_format(htmlspecialchars($d['harga_baru']));  ?></td>
                            <td>
                              <?php echo htmlspecialchars($d['tanggal']); ?>
                               : ( <?php echo htmlspecialchars($d['pengubah']); ?> )
                            </td>
                            <td class=""><?php

                              $hargalama =  $d['harga_lama'];
                              $hargabaru =  $d['harga_baru'];
                              $status = "";



                              if($hargalama == 0){
                                $status = "None";
                              }else if($hargalama == $hargabaru){
                                $status = "stabil";
                              }else if($hargalama <= $hargabaru){
                                $status = "naik";
                              }else if($hargalama >= $hargabaru){
                                $status = "turun";
                              }


                              if($status == "None"){
                                ?>

                              <div class="text-end fs-3 me-5 mb-0 text-dark" style="transform:translateY(-10px) translateX(-5px) ;"> <ion-icon name=""></ion-icon></div>
                              <p class="text-end me-5" style="color: transparent;">  d </p>
                             
                                

                                <?php
                              }else if( $status == "turun"){
                                    
                                    
                                ?>

                              <div class=" fs-3  mb-0 text-success"><ion-icon name="arrow-down-outline"></ion-icon></div>
                              
                               

                              <?php

                              }else if($status == "naik"){

                              ?>


                              <div class=" fs-3  mb-0 text-danger"><ion-icon name="arrow-up-outline"></ion-icon></div>
                              

                              <?php

                              }else if($status == "stabil"){
                                ?>

                              <div class=" fs-3  mb-0 text-dark" > <ion-icon name="reorder-two-outline"></ion-icon></div>
                              

                              <?php



                              }
                              
                              
                              ?>

                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn  text-warning" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $no; ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editmodal<?php echo $no; ?>" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Edit Data Bangan Pangan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form class="row" action="action/acteditpangan.php" method="POST">
                                      <div class="modal-body">
                                          <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                                            <label class="form-label">Harga</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo  htmlspecialchars($d['harga_baru']);?>" autocomplete="off" required>
                                            <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                                            <input type="hidden" name="tgll" value="<?php
                                            $mydate=getdate(date("U"));
                                            echo "$mydate[year]-$mydate[mon]-$mydate[mday]";
                                            ?>">
                                            <input type="hidden" name="hargalama" value="<?php echo $d['harga_baru'];?>">
                                            <input type="hidden" name="pengubah" value="<?php echo $_SESSION['nama'];?>">
                                          </div> 
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                      <button type="submit" class="btn btn-success me-3">Simpan</button>

                                      </div>
                                      </form>

                                    </div>
                                  </div>
                                </div>

                                <?php 
                                
                                if ($_SESSION['role'] == "admin"){

                                  ?>
                                   <span> | </span>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn  text-danger" data-bs-toggle="modal" data-bs-target="#hapusmodal<?php echo $no; ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapusmodal<?php echo $no; ?>" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="col-4">
                                          Yakin untuk hapus data <?php echo htmlspecialchars($d['nama_pangan']);?> ?
                                        </div>  
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                      <a class="btn btn-danger me-3" href="action/acthapuspangan.php?id=<?php echo htmlspecialchars($d['id']);?>">Hapus</a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  
                                  
                                  <?php


                                }else if($_SESSION['role'] == "pegawai"){
                                  ?>
                                  
                                  <span></span>
                                  
                                  
                                  <?php


                                }

                                
                                ?>

                               

                                
                            </td>
                        </tr>

                    <?php    

                    }
                    
                    ?>
                      
                      
                      </tbody>
                  </table>
                </div>
              </div>
            </div>



    </div>
    <!-- akhir row -->
 

 <!-- Akhir Content -->

<?php

include "include/footer.php";


?>