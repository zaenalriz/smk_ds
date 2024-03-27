<?php 
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$pelajaran=$_POST['pelajaran'];
$nilai=$_POST['nilai'];
$tanggal=$_POST['tanggal'];

$edit=mysqli_query($koneksi,"UPDATE users SET 
nama='$nama',
pelajaran='$pelajaran',
nilai='$nilai',
tanggal='$tanggal'
where id_user='$id'");

if($edit){
    header('Location: show.php');
}
