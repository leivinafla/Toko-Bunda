<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../login");
    exit(); // Terminate script execution after the redirect
}
?>
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$tanggal_produksi = $_POST['tanggal_produksi'];
$tanggal_kadarluasa = $_POST['tanggal_kadarluasa'];
$komposisi = $_POST['komposisi'];
$alamat_produksi = $_POST['alamat_produksi'];

 
// update data ke database
mysqli_query($koneksi,"update produk_bunda set nama_produk='$nama_produk', tanggal_produksi='$tanggal_produksi', tanggal_kadarluasa='$tanggal_kadarluasa', komposisi='$komposisi', alamat_produksi='$alamat_produksi' where id_produk='$id_produk'");
 
// mengalihkan halaman kembali ke index.php
header("location:../produk/Tproduk.php");
 
?>

