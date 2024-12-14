<?php
session_start();
include '../koneksi.php';
 
if (!isset($_SESSION['username'])) {
    header("Location: ../login/index.php");
    exit(); // Terminate script execution after the redirect
}

$id_produk = $_GET['id_produk'];
$data = mysqli_query($koneksi,"select * from produk_bunda where id_produk='$id_produk'");

$result = [];


while($d = mysqli_fetch_assoc($data))
{
	$result[] = $d;
}

$result= $result[0];



?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
		<div class="kotak_login">
	<p class="tulisan_login">Edit Data Produk</p>
 
	<form method="POST" action="update.php">
		<label>ID PRODUK</label>
		<input type="text" name="id_produk" class="form_login" placeholder="id atau email .." value="<?php echo $result['id_produk'] ?>">
		<label>NAMA PRODUK</label>
		<input type="text" name="nama_produk" class="form_login" placeholder="nama.." value="<?php echo $result['nama_produk'] ?>">
		<label>TANGGAL PRODUKSI</label>
		<input type="date" name="tanggal_produksi" class="form_login" placeholder="tanggal.." value="<?php echo $result['tanggal_produksi']?>">
		<label>TANGGAL KADARLUASA</label>
		<input type="date" name="tanggal_kadarluasa" class="form_login" placeholder="tanggal.." value="<?php echo $result['tanggal_kadarluasa']?>">
		<label>KOMPOSISI</label>
		<input type="text" name="komposisi" class="form_login" placeholder="komposisi.." value="<?php echo $result['komposisi']?>">
		<label>ALAMAT PRODUKSI</label>
		<input type="text" name="alamat_produksi" class="form_login" placeholder="alamat.." value="<?php echo $result['alamat_produksi'] ?>">
 		<input type="submit" name="submit" class="tombol_login" value="SIMPAN">
		<br/>
		<br/>
		<center>
			<a class="link" href="../produk/Tproduk.php">KEMBALI</a>
		</center>
	</form>
	
</div>
 
</body>
</html>