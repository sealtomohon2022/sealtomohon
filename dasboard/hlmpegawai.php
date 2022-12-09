<?php 

include "../koneksi/koneksi.php";
include "include/head.php";



?>
 
 <!-- Mulai Content -->

 

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="breadcrumb-title pe-3">Pegawai</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="people-outline"></ion-icon></a>
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
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#formtambahusermodal"><ion-icon name="add"></ion-icon>Tambah User</button>
        <!-- Modal -->
          <div class="modal fade" id="formtambahusermodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Form Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row" action="action/acttambahuser.php" method="POST">
                <div class="modal-body">
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" autocomplete="off" required>
                      </div><br>
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" autocomplete="off" required>
                      </div><br>
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                        <label class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukan Password" autocomplete="off" required>
                      </div><br>
                      <div class="col-lg-9 col-sm-11 ms-lg-5 ms-sm-4">
                          <label class="form-label">Role</label><br>
                          <select name="role">
                              <option value="pegawai" class="form-control">Pegawai</option>
                              <option value="admin" class="form-control">Admin</option>
                          </select>
                      </div>
                </div><br><br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-success me-5">Simpan</button>
                </form>

                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- akhir tambahuser -->


            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                   <h5 class="mb-0">Data Pegawai</h5>
                    <!-- <form class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon name="search-sharp"></ion-icon></div>
                      <input class="form-control ps-5" type="text" placeholder="search">
                    </form> -->
                </div>
                <div class="table-responsive mt-3">
                  <table id="dt"  class="table cell-border  align-middle text-center ">
                    <thead class="bg-success text-white">
                      <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Posisi</th>
                       <th>Alamat</th>
                       <th>No. HP</th>
                       <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM user");

                    foreach($data as $d){

                        ?>

                        <tr>
                        <td><?php echo $no++; ?></td>
                            <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="../assets/images/avatar/<?php echo htmlspecialchars($d['foto']);?>" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                <p class="mb-0"><?php echo htmlspecialchars($d['nama']); ?></p>
                                </div>
                            </div>
                            </td>
                            <td><?php echo htmlspecialchars($d['posisi']);  ?></td>
                            <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                            <td><?php echo htmlspecialchars($d['no_hp']); ?></td>
                            <td>
                                <a href="#" class="text-info p-2">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye" data-bs-toggle="tooltip" data-bs-placement="top"  title="Username : <?php echo htmlspecialchars($d['username']);?> | Password : <?php echo htmlspecialchars($d['password']);?> "><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

                                </a>

                                <span> | </span>

                                <!-- <a href="<?php echo $d['id'];?>" class="text-warning p-2">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>

                                </a>
                                <span> | </span> -->


                                <!-- Button trigger modal -->
                                <button type="button" class="btn bg-white text-danger" data-bs-toggle="modal" data-bs-target="#hapusmodal<?php echo $no; ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapusmodal<?php echo $no; ?>" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus User</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="col-4">
                                          Yakin untuk hapus user <?php echo htmlspecialchars($d['nama']);?> ?
                                        </div>  
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                      <a class="btn btn-danger me-3" href="action/acthapususer.php?id=<?php echo htmlspecialchars($d['id']);?>">Hapus</a>

                                      </div>
                                    </div>
                                  </div>
                                </div>

                                
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
<!-- Akhir Row -->


 <!-- Akhir Content -->

<?php

include "include/footer.php";


?>