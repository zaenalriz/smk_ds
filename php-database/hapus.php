<?php 
include 'koneksi.php';
$id_user=$_GET['id_user'];

$hapus=mysqli_query($koneksi,"DELETE FROM users where id_user='$id_user'");
if($hapus){
    header('Location: show.php');
}