<?php
include 'koneksi.php';

$id = $_GET['ID'];
if (!empty($id)){
	mysqli_query($connect,"DELETE FROM warga WHERE id = '$id'");
	header("location:../warga.php");
}
?>