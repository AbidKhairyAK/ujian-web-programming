<?php
session_start();
include 'koneksi.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
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
	mysqli_query($connect,
		"UPDATE warga 
		SET nama = '$nama', kk = '$kk', nik = '$nik', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', jenis_kelamin = '$jenis', alamat = '$alamat', user_id = '$user', tanggal_input = '$input' 
		WHERE id = '$id'");
	header("location:../warga.php");
} else {
	echo "data tidak lengkap!!";
}
?>