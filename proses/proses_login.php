<?php
include 'koneksi.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($email) && !empty($pass)) {
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");
	$result = mysqli_num_rows($sql);
	if ($result) {
		$row = mysqli_fetch_array($sql);
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['user_id'] = $row['id'];
		header("location:../warga.php");
	} else {
		echo "Email dan Password salah";
	}
} else {
	echo "Email dan Password anda kosong, silahkan diisi.";
}
?>