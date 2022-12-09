<?php 

include "../koneksi/koneksi.php";
include "include/head.php";

$data = mysqli_query($koneksi, "SELECT * FROM user");
$jumlahuser = mysqli_num_rows($data);

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
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#formtambahusermodal"><ion-icon name="add"></ion-icon>Tambah</button>
        <!-- Modal -->
          <div class="modal fade" id="formtambahusermodal" tabindex="-1" aria-hidden="true">
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
                        <input type="text" name="harga" class="form-control" placeholder="Masukan Harga Pangan" autocomplete="off" required>
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

    </div>
    <!-- akhir row -->
 

 <!-- Akhir Content -->

<?php

include "include/footer.php";


?>