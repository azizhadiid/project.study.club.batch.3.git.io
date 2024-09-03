<?php
include 'koneksi.php';

// Mengambil nilai post
$id_resep = $_GET['id_resep'];

// Query
$query_hapus = "DELETE FROM resepmakanan WHERE id_resep = '$id_resep'";
$hapus = mysqli_query($db, $query_hapus);

// Cek
if ($hapus) {
    header("Location: ../tables.php");
	exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($db);
}
?>