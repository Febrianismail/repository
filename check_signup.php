<?php
if($_POST){
	$nama=$_POST['nama'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$alamat=$_POST['alamat'];
	$no_identitas=$_POST['no_identitas'];
	$no_hp=$_POST['no_hp'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(empty($nama)){
		echo "<script>alert('Nama tidak boleh kosong');location.href='signup.php';</script>";
	} elseif (empty($username)){
		echo "<script>alert('Username tidak boleh kosong');location.href='signup.php';</script>";
	} elseif (empty($password)){
		echo "<script>alert('Password tidak boleh kosong');location.href='signup.php';</script>";	
	} else {
		include "connect.php";
		$insert=mysqli_query($conn,"insert into admin (nama, tgl_lahir, alamat, no_identitas, no_hp, email, username, password)  value ('".$nama."','".$tgl_lahir."','".$alamat."', '".$no_identitas."', '".$no_handphone."','".$email."', '".$username."','".$password."')") or die(mysqli_error($conn));
		if($insert){
				echo "<script>alert('Sukses menambahkan Admin');location.href='admindata.php';</script>";
		} else {
				echo "<script>alert('Gagal menambahkan Admin');location.href='signup.php';</script>";
		}
	}
}
?>