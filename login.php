<?php  
    session_start();

    if(isset($_SESSION['userlogin'])) {
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:wght@400;500;600&family=Open+Sans:wght@400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="CSS/sb-admin-2.min.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/login.css">

</head>

<body class="" style="background-color: bisque;">

    <div class="container" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">

        <!-- Outer Row -->
        <!-- Nested Row within Card Body -->
        <div class="row bg-light justify-content-center my-5 shadow-lg p-3" style="border-radius: 20px;">
            <div class="col-lg-6 d-none d-lg-block bg-login" style="border-radius: 20px;"></div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900" style="margin-bottom: 20px;">Login To Bumbu Ku</h1>
                    </div>
                    <form class="user" action="helper/login_proses.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" name="emailaddres" placeholder="Enter Email Address..." required>
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password" name="password" required>
                        </div>
                        <?php
                        // memeriksa apakah ada pesan kesalahan
                        if (isset($_SESSION['error_message'])) {
                            echo '<div class="error-message text-center mb-3">';
                            echo '<i class="text-danger">' . $_SESSION['error_message'] . '</i>';
                            echo '</div>';
                            // hapus pesan kesalahan setelah ditampilkan
                            unset($_SESSION['error_message']);
                        }
                        ?>
                        <button class="btn btn-primary btn-user btn-block" type="submit" name="button" id="buttonLogin">
                            Login
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="">
                            Buat Akun Klik <a class="" href="register.php" style="">Disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>