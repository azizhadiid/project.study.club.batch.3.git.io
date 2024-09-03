<?php
include 'koneksi.php'; 
//mengambil nilai post
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddres = $_POST['emailaddres'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

//query
$query_simpan = "INSERT INTO pengguna (firstname, lastname, emailaddres, password, repeatpassword) 
                 VALUES ('$firstname','$lastname','$emailaddres','$password','$repeatpassword')";
$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
    echo  "<script>alert('Data berhasil disimpan!');</script>";
	header("Location: ../login.php");
	exit();
} else {
    echo "<script>alert('Gagal menyimpan data!');</script>";
}
?>
