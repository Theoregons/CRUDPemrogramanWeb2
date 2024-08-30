<?php 
require 'function.php';
 
$id = $_GET['id'];
$del = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
echo '<script type="text/javascript"> alert("Data Berhasil Dihapus!"); </script>';
header("location:pelanggan.php");
?>
