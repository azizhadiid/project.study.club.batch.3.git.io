<?php
include 'koneksi.php';
//mengambil Nilai Post

$id_user=$_POST['id_user'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailaddres=$_POST['emailaddres'];

//query 
$query_update="UPDATE `pengguna` SET `firstname` = '$firstname', `lastname` = '$lastname', `emailaddres` = '$emailaddres' WHERE `pengguna`.`id_user` = '$id_user'";

$update=mysqli_query($db,$query_update);

if ($update) {
	header("Location: ../index.php");
	exit();
}
else{
	echo "gagal <br>";
}

 ?>

<a href="tampil_anggota.php">Tampil Anggota</a>