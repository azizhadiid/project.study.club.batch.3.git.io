<?php
// mengaktifkan session php
session_start();

include 'koneksi.php'; 
//mengambil nilai post
$nama_resep=$_POST['nama_resep'];
$jenis_makanan=$_POST['jenis_makanan'];
$asal_makanan = $_POST['asal_makanan'];
$durasi_pembuatan=$_POST['durasi_pembuatan'];
$sumber=$_POST['sumber'];
$id_user = $_SESSION['id_user']; // Simpan ID pengguna ke dalam session

//query
$query_simpan="INSERT INTO resepmakanan (id_user, nama_resep, jenis_makanan, asal_makanan,durasi_pembuatan, sumber) 
				values ('$id_user','$nama_resep','$jenis_makanan', '$asal_makanan','$durasi_pembuatan','$sumber')";
$simpan=mysqli_query($db,$query_simpan);

//cek
if ($simpan) {
	header("Location: ../tables.php");
	exit();
}
else{
	echo "gagal <br>";
}
 ?>