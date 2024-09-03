<?php
include 'koneksi.php';
//mengambil Nilai Post
$id_resep = $_POST['id_resep'];
$nama_resep = $_POST['nama_resep'];
$jenis_makanan = $_POST['jenis_makanan'];
$asal_makanan = $_POST['asal_makanan'];
$durasi_pembuatan = $_POST['durasi_pembuatan'];
$sumber = $_POST['sumber'];

// query yang benar
$query_update = "UPDATE `resepmakanan` SET 
                `nama_resep` = '$nama_resep', 
                `jenis_makanan` = '$jenis_makanan', 
                `asal_makanan` = '$asal_makanan',  
                `durasi_pembuatan` = '$durasi_pembuatan', 
                `sumber` = '$sumber' 
                WHERE `resepmakanan`.`id_resep` = '$id_resep' ORDER BY id_resep DESC";

$update = mysqli_query($db, $query_update);

if ($update) {
    header("Location: ../tables.php");
    exit();
} else {
    echo "gagal <br>";
}
?>
