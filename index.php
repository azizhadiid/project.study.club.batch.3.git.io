<?php  
    session_start();

    if(!isset($_SESSION['userlogin'])) {
        header("location: login.php");
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
    }
     
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

    <title>Bumbu Ku - Profile</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: rgb(163, 140, 111);"
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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
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
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    Profile Page
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row card-->
                    <?php 
                        //koneksi
                        include 'helper/koneksi.php';
                        //query
                        $email = $_SESSION['userlogin'];
                        $query_tampil = "SELECT * FROM pengguna WHERE emailaddres='$email'";
                        $data = mysqli_query($db, $query_tampil);
                        $d = mysqli_fetch_array($data);
                    ?>
                    <div class="card">
                        <div class="card-header text-primary font-weight-bold h4"
                            style="background-color: blanchedalmond;">
                            My Profile
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-primary">Hello</p>
                                <p>Nama: <?php echo $d['firstname']?> <?php echo $d['lastname']?></p>
                                <p>Email: <?php echo $d['emailaddres']?></p>
                            </blockquote>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <a href="" data-toggle="modal" data-target="#editModal" class="btn btn-warning">Edit</a>


                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="helper/update_profile.php" method="POST">
                                            <div class="modal-body">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" name="firstname"
                                                    value="<?php echo $d['firstname']?>" />

                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" name="lastname"
                                                    value="<?php echo $d['lastname']?>" />

                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="emailaddres"
                                                    value="<?php echo $d['emailaddres']?>" />

                                                <input type="hidden" name="id_user" class="form-control" id="id_user"
                                                    value="<?php  echo $d['id_user']?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->

                            <!-- Start logout -->
                            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Logout
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Logout Akun
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda ingin keluar dari akun ini ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tidak</button>
                                            <a href="index.php?logout=true" class="btn btn-danger w-10"
                                                type="button">Logout Akun</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Logout -->
                        </div>
                        <!-- End Card Footer -->
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>