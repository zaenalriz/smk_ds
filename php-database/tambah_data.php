<?php 
include 'koneksi.php';
$nama=$_POST['nama'];
$pelajaran=$_POST['pelajaran'];
$nilai=$_POST['nilai'];
$tanggal=$_POST['tanggal'];

$insert=mysqli_query($koneksi,
"INSERT INTO users (nama,pelajaran,nilai,tanggal)
 values('$nama','$pelajaran','$nilai','$tanggal')");

if($insert){
header('Location: show.php');
}