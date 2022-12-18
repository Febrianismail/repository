<?php 
if ($_POST) {
    $id_admin=$_POST['id_admin'];
    $nama=$_POST['nama'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='edit_admin.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='edit_admin.php';</script>";
    } else {
        include "connect.php";
        if (empty($password)) {
            $update=mysqli_query($conn,"update admin set nama='".$nama."', alamat='".$alamat."', username='".$username."', where id_admin = '".$id_admin."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='admindata.php';</script>";    
            } else {
                echo "<script>alert('Gagal update data');location.href='edit_admin.php';</script>"; 
            }
        } else {
            $update=mysqli_query($conn,"update admin set nama='".$nama."', alamat='".$alamat."', username='".$username."', password='".$password."'  where id_admin = '".$id_admin."' ")or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data');location.href='admindata.php';</script>";       
            }   else {
                echo "<script>alert('Gagal update data');location.href='edit_admin.php';</script>";    
            }
        }
    }
    }
?>