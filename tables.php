<?php
session_start();

$id = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Bumbu Ku - Resep Makanan</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:rgb(163, 140, 111);"
      id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa-solid fa-plate-wheat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bumbu Ku</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fa-solid fa-user"></i>
          <span>Profile</span></a>
      </li>


      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fa-solid fa-book"></i>
          <span>Resep Makanan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow font-weight-bold h4">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          Catatan Bumbu Ku
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 font-weight-bold h4 text-primary" style=" background-color: blanchedalmond; display: flex;
                              justify-content: space-between;
                              align-items: center;">Resep Makanan</class=>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data
                Resep
              </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Tambah Data Resep </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="helper/proses_table.php" method="POST">
                      <div class="form-group">
                        <label for="formGroupExampleInput">Nama Resep</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama_resep" />
                      </div>

                      <!-- Input Jenis makanan -->
                      <div class="form-group">
                        <label for="form-check-label" class="col-form-label">Jenis
                          Makanan</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_makanan" id="exampleRadios1"
                            value="Makanan-Berat" required>
                          <label class="form-check-label" for="exampleRadios1">
                            Makanan Berat
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_makanan" id="exampleRadios2"
                            value="Makanan-Ringan" required>
                          <label class="form-check-label" for="exampleRadios2">
                            Makanan Ringan
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Asal Makanan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="asal_makanan" />
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Durasi Pembuatan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="durasi_pembuatan" />
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Sumber</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="sumber" />
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                          Tutup
                        </button>
                        <button type="submit" class="btn btn-primary">
                          Tambah Data
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal  -->

            <!-- Start Card Body -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <!-- Title Table -->
                      <th>Nama Makanan</th>
                      <th>Jenis Makanan</th>
                      <th>Asal Makanan</th>
                      <th>Durasi Pembuatan</th>
                      <th>Sumber</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                                            include 'helper/koneksi.php';
        
                                            $query_tampil = "SELECT * FROM resepmakanan WHERE id_user = '$id'";
                                            $tampil = mysqli_query($db,$query_tampil);
                                            while($data = mysqli_fetch_array($tampil)) {
                                        ?>
                    <tr>
                      <!-- Content Of Table -->
                      <td><?php echo $data['nama_resep']?></td>
                      <td><?php echo $data['jenis_makanan']?></td>
                      <td><?php echo $data['asal_makanan']?></td>
                      <td><?php echo $data['durasi_pembuatan']?></td>
                      <td>
                        <a class="btn btn-success" href="<?php echo $data['sumber']?>" role="button"
                          target="_blank">Link</a>
                      </td>

                      <td>
                        <!-- Tombol edit -->
                        <a href="#" class="btn btn-warning" data-toggle="modal"
                          data-target="#example<?php echo $data['id_resep']?>">Edit</a>

                        <!-- Modal -->
                        <div class="modal fade" id="example<?php echo $data['id_resep']?>" tabindex="-1"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                  Resep</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="helper/update_table.php" method="POST">
                                  <div class="form-group">
                                    <label for="formGroupExampleInput">Nama
                                      Resep</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_resep"
                                      value="<?php echo $data['nama_resep']?>" />
                                  </div>
                                  <!-- Input Jenis makanan -->
                                  <div class="form-group">
                                    <label for="form-check-label" class="col-form-label">Jenis Makanan</label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jenis_makanan"
                                        id="exampleRadios1" value="Makanan-Berat"
                                        <?php echo $data['jenis_makanan'] == 'Makanan-Berat' ? 'checked' : ''; ?>>
                                      <label class="form-check-label" for="exampleRadios1">Makanan
                                        Berat</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jenis_makanan"
                                        id="exampleRadios2" value="Makanan-Ringan"
                                        <?php echo $data['jenis_makanan'] == 'Makanan-Ringan' ? 'checked' : ''; ?>>
                                      <label class="form-check-label" for="exampleRadios2">Makanan
                                        Ringan</label>
                                    </div>
                                  </div>

                                  <!-- Input asal Makanan -->
                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Asal
                                      Makanan</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                      name="asal_makanan" value="<?php echo $data['asal_makanan']?>" />
                                  </div>

                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Durasi
                                      Pembuatan</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                      name="durasi_pembuatan" value="<?php echo $data['durasi_pembuatan']?>" />
                                  </div>
                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Sumber</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="sumber"
                                      value="<?php echo $data['sumber']?>" />

                                    <input type="hidden" name="id_resep" class="form-control" id="id_resep"
                                      value="<?php echo $data['id_resep']?>">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->

                        <!-- start Hapus -->
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                          data-target="#deleteModal<?php echo $data['id_resep']?>">
                          Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal<?php echo $data['id_resep']?>" tabindex="-1"
                          role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Apakah anda yakin ingin menghapus data
                                <?php echo $data['nama_resep']?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <a href="helper/delete_table.php?id_resep=<?php echo $data['id_resep']?>"
                                  class="btn btn-danger">
                                  Hapus
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End hapus -->
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bumbu Ku 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>