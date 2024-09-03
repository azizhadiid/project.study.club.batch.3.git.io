<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$emailaddres = $_POST['emailaddres'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"SELECT * FROM pengguna where emailaddres='$emailaddres' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$user = mysqli_fetch_assoc($data); // Mengambil data pengguna dari hasil query
	$_SESSION['userlogin'] = $emailaddres;
	$_SESSION['id_user'] = $user['id_user']; // Simpan ID pengguna ke dalam session
	$_SESSION['status'] = "login";
	header("location: ../index.php");
}else{
	 // Save error message in the session
	 $_SESSION['error_message'] = "Username atau password salah";
	 header("location: ../login.php");
}
?>