<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $judulBuku = $_POST['judul_buku'];
    $penulisBuku = $_POST['penulis_buku'];
    $prodiBuku = $_POST['prodi_buku'];
    $abstrakBuku = $_POST['abstrak_buku'];
    $typeBuku = $_POST['type_buku'];

    // file upload 
    $namaFile = $_FILES['file_buku']['name'];
    $namaSementara = $_FILES['file_buku']['tmp_name'];
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "upload/";
    $namaFileNews = str_replace(" ", "_", $namaFile);
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFileNews);
    // file upload 

    if (!empty($judulBuku) && !empty($penulisBuku) && !empty($prodiBuku) && !empty($abstrakBuku) && !empty($typeBuku)) {
        if ($terupload) {
            // upload file berhasil 
            if (!empty($_POST['id_buku'])) {
                $values = "judul_buku='" . $judulBuku . "', penulis_buku='" . $penulisBuku . "', prodi_buku='" . $prodiBuku . "',abstrak_buku='" . $abstrakBuku . "',file_buku='" . $namaFileNews . "',type_buku='" . $typeBuku . "' where id_buku = '" . $_POST['id_buku'] . "' ";
                $queryData = "UPDATE `tb_buku` SET " . $values;
            } else {
                $values = "VALUES('" . $judulBuku . "', '" . $penulisBuku . "', '" . $prodiBuku . "','" . $abstrakBuku . "', '" . $namaFileNews . "', '" . $typeBuku . "')";
                $queryData = "INSERT INTO `tb_buku` (judul_buku,penulis_buku,prodi_buku,abstrak_buku,file_buku,type_buku) " . " " . $values;
            }

            $save = mysqli_query($conn, $queryData);
            header('location: list_buku.php');
        } else {
            // upload file gagal
            if (!empty($_POST['id_buku'])) {
                $values = "judul_buku='" . $judulBuku . "', penulis_buku='" . $penulisBuku . "', prodi_buku='" . $prodiBuku . "',abstrak_buku='" . $abstrakBuku . "', type_buku='" . $typeBuku . "' where id_buku = '" . $_POST['id_buku'] . "' ";
                $queryData = "UPDATE `tb_buku` SET " . $values;
                $save = mysqli_query($conn, $queryData);
                header('location: list_buku.php');
            } else {
                echo "<script>alert('Upload File Gagal!');location.href='tambah_buku.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Data Harus Di Isi!');location.href='tambah_buku.php';</script>";
    }
}

if ($_GET['id_buku']) {
    include "connect.php";
    $qry_hapus = mysqli_query($conn, "delete from tb_buku where id_buku='" . $_GET['id_buku'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus Data Buku');location.href='list_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus Data Buku');location.href='list_buku.php';</script>";
    }
}
