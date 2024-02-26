<?php 
// koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_GET['idbuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST('tahunterbit')
 
// update data ke database
mysqli_query($koneksi,"UPDATE buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit' where IDbuku='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>