<?php
include 'koneksi.php';
//mengambil Nilai Post
$id_anggota=$_POST['id_anggota'];
$nama_anggota=$_POST['nama_anggota'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];

//query 
$query_update="UPDATE `tbanggota` SET `nama` = '$nama_anggota', `jeniskelamin` = '$jk', `alamat` = '$alamat' WHERE `tbanggota`.`idanggota` = '$id_anggota'";

$update=mysqli_query($db,$query_update);

if ($update) {
	echo "berhasil <br>";
}
else{
	echo "gagal <br>";
}

 ?>

<a href="tampil_anggota.php">Tampil Anggota</a>