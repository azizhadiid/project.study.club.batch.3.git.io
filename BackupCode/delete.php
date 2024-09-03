<?php
include 'koneksi.php';

// Mengambil nilai post
$id_anggota = $_POST['id_anggota'];

// Query
$query_hapus = "DELETE FROM tbanggota WHERE idanggota = '$id_anggota'";
$hapus = mysqli_query($db, $query_hapus);

// Cek
if ($hapus) {
    echo "Data berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($db);
}
?>