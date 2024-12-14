<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../login");
    exit(); // Terminate script execution after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<?php
	include '../koneksi.php';
	$id_karyawan = $_GET['id_karyawan'];
	$data = mysqli_query($koneksi,"select * from karyawan_bunda where id_karyawan='$id_karyawan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
	<p class="tulisan_login">Edit Data Karyawan</p>
 
	<form method="POST" action="update.php">
		<label>ID KARYAWAN</label>
		<input type="hidden" name="id_karyawan" class="form_login" placeholder="id atau email .." value="<?php echo $d['id_karyawan'] ?>">
		<label>USERNAME</label>
		<input type="text" name="username" class="form_login" placeholder="nama.." value="<?php echo $d['username'] ?>">
		<label>PASSWORD</label>
		<input type="password" name="password" class="form_login" placeholder="password.." value="<?php echo $d['password'] ?>">
		<label>EMAIL</label>
		<input type="text" name="email" class="form_login" placeholder="email.." value="<?php echo $d['email']?>">
 		<input type="submit" class="tombol_login" value="SIMPAN">
		<br/>
		<br/>
		<center>
			<a class="link" href="../karyawan/Tkaryawan.php">KEMBALI</a>
		</center>
	</form>
	
</div>
		<?php 
	}
	?>
 
</body>
</html>