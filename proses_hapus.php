<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_GET['id'])){

// Ambil data ID yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
$sql="DELETE FROM pemrograman WHERE id=$id";
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$result = mysqli_query($conn,$sql);


  header("location: crud.php"); // Redirect ke halaman index.php
}else{
echo "akses ditolak";
}
?>