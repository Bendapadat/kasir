<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$janiskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelepon= $_POST['notelepon'];
// menginput data ke database
mysqli_query($koneksi,"insert into member values('$nik','$nama','$janiskelamin','$alamat','$notelepon')");
 
// mengalihkan halaman kembali ke data_barang.php
header("location:data_member.php?pesan=update");
 
?>