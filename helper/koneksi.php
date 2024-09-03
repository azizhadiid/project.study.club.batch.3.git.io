<?php

$server = "localhost";
$user = "root";
$password = "";
$db_registrasi = "registrasi";

$db = mysqli_connect($server, $user, $password, $db_registrasi);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>