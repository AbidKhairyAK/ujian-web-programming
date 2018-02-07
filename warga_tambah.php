<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ujian - Tambah Warga</title>
	</head>
	<body>
		<h1>Tambah Warga</h1>
		<form action="proses/warga_proses_tambah.php" method="post">
			<table>
				<tr>
					<td><label for="nama">Nama</label></td>
					<td> : <input type="text" name="nama" id="nama" required></td>
				</tr>
				<tr>
					<td><label for="kk">No. KK</label></td>
					<td> : <input type="text" name="kk" id="kk" minlength="16" maxlength="16" required></td>
				</tr>
				<tr>
					<td><label for="number">NIK</label></td>
					<td> : <input type="text" name="nik" id="nik" minlength="16" maxlength="16" required></td>
				</tr>
				<tr>
					<td><label for="tempat">Tempat Lahir</label></td>
					<td> : <input type="text" name="tempat" id="tempat" required></td>
				</tr>
				<tr>
					<td><label for="tahun">Tanggal Lahir</label></td>
					<td> : 
						<input type="date" name="tanggal" id="tanggal" placeholder="Tanggal" required>
					</td>
				</tr>
				<tr>
					<td><label for="jenis">Jenis Kelamin</label></td>
					<td> : 
						<input type="radio" name="jenis" id="jenis" value="l" required> Laki-laki
						<input type="radio" name="jenis" id="jenis" value="p" required> Perempuan
					</td>
				</tr>
				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td> : <input type="text" name="alamat" id="alamat" required></td>
				</tr>
				<tr>
					<td><button type="submit">SUBMIT</button></td>
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