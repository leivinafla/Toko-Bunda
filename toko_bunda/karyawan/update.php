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
$id_karyawan = $_POST['id_karyawan'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

 
// update data ke database
mysqli_query($koneksi,"update karyawan_bunda set username='$username', password='$password', email='$email' where id_karyawan='$id_karyawan'");
 
// mengalihkan halaman kembali ke index.php
header("location:Tkaryawan.php");
 
?>

