<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ujian - Edit Warga</title>
	</head>
	<body>
		<h1>Detail Warga</h1>
		<a href="warga.php">Home</a>
		<hr>
		<?php
			include 'proses/koneksi.php';
			
			$id = $_GET['ID'];
			$sql = mysqli_query($connect,"SELECT * FROM warga WHERE id='$id'");
			$row = mysqli_fetch_array($sql);
		?>
		<form action="proses/warga_proses_edit.php" method="post">
			<table>
				<tr>
					<td><label for="nama">Nama</label></td>
					<td> : <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>" disabled></td>
				</tr>
				<tr>
					<td><label for="kk">No. KK</label></td>
					<td> : <input type="text" name="kk" id="kk" minlength="16" maxlength="16" value="<?= $row['kk'] ?>" disabled></td>
				</tr>
				<tr>
					<td><label for="number">NIK</label></td>
					<td> : <input type="text" name="nik" id="nik" minlength="16" maxlength="16"  value="<?= $row['nik'] ?>" disabled></td>
				</tr>
				<tr>
					<td><label for="tempat">Tempat Lahir</label></td>
					<td> : <input type="text" name="tempat" id="tempat" value="<?= $row['tempat_lahir'] ?>" disabled></td>
				</tr>
				<tr>
					<td><label for="tahun">Tanggal Lahir</label></td>
					<td> : 
						<input type="date" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?= $row['tanggal_lahir'] ?>" disabled>
					</td>
				</tr>
				<tr>
					<td><label for="jenis">Jenis Kelamin</label></td>
					<td> : 
						<input type="radio" name="jenis" id="jenis" value="l" <?= (($row['jenis_kelamin'] == "l") ? "checked" : '') ?> disabled> Laki-laki
						<input type="radio" name="jenis" id="jenis" value="p" <?= (($row['jenis_kelamin'] == "p") ? "checked" : '') ?> disabled> Perempuan
					</td>
				</tr>
				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td> : <input type="text" name="alamat" id="alamat" value="<?= $row['alamat'] ?>" disabled></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	} else {
		header("location:index.php");
	}
?>