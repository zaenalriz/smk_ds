<?php 
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];

$cekUsername=mysqli_query($koneksi,"SELECT * FROM user_admin where username='$username'");

if(mysqli_num_rows($cekUsername)==1){
$row=mysqli_fetch_assoc($cekUsername);
if(password_verify($password,$row['password'])){
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $row['id'];
    // Redirect ke halaman selamat datang atau halaman lain yang diinginkan
    header("Location: show.php");
echo "password benar bisa login";
}else{
echo "password salah!";
}

}else{
header('Location: login.php');
}