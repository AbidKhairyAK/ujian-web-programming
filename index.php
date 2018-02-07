<?php
	session_start();
	if(isset($_SESSION['login'])){
		header("location:warga.php");
	} else {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ujian - Login Form</title>
	</head>
	<body>
		<h1>LOGIN FORM</h1>
		<form action="proses/proses_login.php" method="post">
			<table>
				<tr>
					<td><label for="email">Email</label></td>
					<td> : <input type="email" name="email" id="email" placeholder="your@email.com"></td>
				</tr>
				<tr>
					<td><label for="pass">Password</label></td>
					<td> : <input type="password" name="pass" id="pass" placeholder="******"></td>
				</tr>
				<tr>
					<td><button type="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php } ?>