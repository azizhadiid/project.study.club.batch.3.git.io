<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:wght@400;500;600&family=Open+Sans:wght@400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/register.css">
</head>

<body class="">
    <div class="container" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">

        <!-- Nested Row within Card Body -->
        <div class="row bg-light justify-content-center my-5 shadow-lg p-3" style="border-radius: 20px;">
            <div class="col-lg-5 d-none d-lg-block bg-login" style="border-radius: 20px;"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" action="helper/register_proses.php" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="firstName"
                                    placeholder="First Name" name="firstname" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="lastName"
                                    placeholder="Last Name" name="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="inputEmail"
                                placeholder="Email Address" name="emailaddres" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="inputPassword"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="repeatPassword"
                                    placeholder="Repeat Password" name="repeatpassword" required>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit" id="register" name="register">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="">
                            Sudah Punya Akun Klik <a class="" href="login.php" style="">Disini</a>
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