<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ujian - Pencarian Warga</title>
	</head>
	<body>
		<h1>Pencarian Warga</h1>
		<a href="warga.php">Home</a>
		<a href="logout.php">Logout</a>
		<hr>
		<a href="warga_tambah.php">Tambah Data Warga</a>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIK</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Aksi</th>
			</tr>
			<?php
				include 'proses/koneksi.php';
				$nama = isset($_POST['nama']) ? $_POST['nama'] : '' ;
				$sql = mysqli_query($connect,"SELECT * FROM warga WHERE nama LIKE '%$nama%' ORDER BY nama ASC");
				$no = 1;
				while ($row = mysqli_fetch_array($sql)){
					echo "
					<tr>
						<td>".$no++."</td>
						<td>".$row['nama']."</td>
						<td>".$row['nik']."</td>
						<td>".(($row['jenis_kelamin'] == "l") ? 'Laki-laki' : 'Perempuan')."</td>
						<td>".date("d M Y",strtotime($row['tanggal_lahir']))."</td>
						<td>
							<a href='warga_edit.php?ID=$row[id]'>Edit</a>
							<a href='warga_detail.php?ID=$row[id]'>Detail</a>
							<a href='proses/warga_proses_hapus.php?ID=$row[id]'>Hapus</a>
						</td>
					</tr>
					";
				}
			?>
		</table>
		
	</body>
</html>
<?php
	} else {
		header("location:index.php");
	}
?>