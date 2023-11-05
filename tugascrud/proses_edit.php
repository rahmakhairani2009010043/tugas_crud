<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];


$result = mysqli_query($conn, "UPDATE `pelanggan` set `nama` = '$nama', `jenis_kelamin` = '$jenis_kelamin', `telpon` = '$telpon', `alamat` = '$alamat' where `id` = '$_GET[id]'");

header("Location:index.php");

?>