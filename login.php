<?php

//session_start();
include 'config/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$pass = md5($password);

$query  = "SELECT * FROM admin WHERE username = '$username' and password='$password'";
$hasil  = mysqli_query($conn, $query);
$data   = mysqli_fetch_array($hasil);

 
if($data > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:mhs/index.php");
}else{
    header("location:index.php?pesan=gagal");	
}






?>