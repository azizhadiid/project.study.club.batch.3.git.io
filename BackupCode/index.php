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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Bumbu Ku</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
                    

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
                        <div class="card-header text-primary font-weight-bold h4"> My Profile </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-primary">Hello</p>
                                <a> Nama saya <?php echo $d['firstname']?> <?php echo $d['lastname']?>;</a>
                                <a> EMail saya <?php echo $d['emailaddres']?>;</a>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-danger w-10" data-toggle="modal"
                                data-target="#exampleModal">edit</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="helper/update_profile.php" method="POST">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        name="firstname" value="<?php echo $d['firstname']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        name="lastname" value="<?php echo $d['lastname']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Emial
                                                        Addres</label>
                                                    <input type="email" class="form-control" id="recipient-name"
                                                        name="emailaddres" value="<?php echo $d['emailaddres']?>">

                                                    <input type="hidden" name="id_user" class="form-control"
                                                        id="id_user" value="<?php  echo $d['id_user']?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Send message</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <a href="index.php?logout=true" class="btn btn-danger w-10">Logout</a>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Color System -->
                                <div class="row">
                                </div>

                            </div>

                            <div class="col-lg-6 mb-4">

                            </div>



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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