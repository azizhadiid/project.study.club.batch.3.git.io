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

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
//koneksi
include 'helper/koneksi.php';
//query
$email = $_SESSION['userlogin'];
$query_tampil = "SELECT * FROM pengguna WHERE emailaddres='$email'";
$data = mysqli_query($db, $query_tampil);
$d = mysqli_fetch_array($data);
?>

<a href="" class="text-dark" name="emailaddres"><?php echo $d['emailaddres']?></a><br>
<a href="" class="text-dark" name="firstname"><?php echo $d['firstname']?></a><br>
<a href="" class="text-dark" name="lastname"><?php echo $d['lastname']?></a><br>

<a href="index.php?logout=true" class="text-dark">Log Out</a>





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