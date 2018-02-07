<?php
session_start();
include 'koneksi.php';

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$kk = isset($_POST['kk']) ? $_POST['kk'] : '';
$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$tempat = isset($_POST['tempat']) ? $_POST['tempat'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$input = date("Y-m-d H:i:s",time());
$user = $_SESSION['user_id'];

if (!empty($nama) && !empty($kk) && !empty($nik) && !empty($tempat) && !empty($tanggal) && !empty($jenis) && !empty($alamat)){
	mysqli_query($connect,"INSERT INTO warga VALUES(null,'$nama','$kk','$nik','$tempat','$tanggal','$jenis','$alamat','$user','$input')");
	header("location:../warga.php");
} else {
	echo "data tidak lengkap!!";
}
?>