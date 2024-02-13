<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelepon = $_POST['notelepon'];
 
// update data ke database
mysqli_query($koneksi,"update member set nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat',notelepon='$notelepon' where nik='$nik'");
 
// mengalihkan halaman kembali ke data_member.php
header("location:data_member.php?pesan=update");
 
?>