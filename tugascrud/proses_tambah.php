<?php 
include 'koneksi.php';
// get variable from form input
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];

$result = mysqli_query($conn, "INSERT INTO `pelanggan` (`nama`, `jenis_kelamin`, `telpon`, `alamat`) VALUES ('$nama', '$jenis_kelamin', '$telpon', '$alamat');");

header("Location:index.php");

?>