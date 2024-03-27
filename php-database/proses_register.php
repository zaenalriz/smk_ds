<?php 
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$hash=password_hash($password,PASSWORD_DEFAULT);

$register=mysqli_query($koneksi,
"INSERT INTO user_admin (username,password) values('$username','$hash')");

if($register){
    echo"register berhasil";
}

