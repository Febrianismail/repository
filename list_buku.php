<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
</head>
<?php
include "connect.php";
include "touchpoint.php";
?>

<body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-header">
                        List Buku
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">PENULIS</th>
                                    <th scope="col">PRODI</th>
                                    <th scope="col">ABSTRAK</th>
                                    <th scope="col">FILE BUKU</th>
                                    <th scope="col">TYPE BUKU</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qryListBuku = mysqli_query($conn, "select * from tb_buku join tb_prodi on tb_prodi.id_prodi = tb_buku.prodi_buku");
                                $no = 0;
                                while ($dataListBuku = mysqli_fetch_array($qryListBuku)) {
                                    $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $dataListBuku['judul_buku'] ?></td>
                                        <td><?= $dataListBuku['penulis_buku'] ?></td>
                                        <td><?= $dataListBuku['nama_prodi'] ?></td>
                                        <td><?= $dataListBuku['abstrak_buku'] ?></td>
                                        <td><a href="upload/<?= $dataListBuku['file_buku'] ?>">Download File</a></td>
                                        <td><?= $dataListBuku['type_buku'] ?></td>
                                        <td><a href="tambah_buku.php?id_buku=<?= $dataListBuku['id_buku'] ?>" class="btn btn-success btn-primary btn-sm">Ubah</a> | <a href="prosess_buku.php?id_buku=<?= $dataListBuku['id_buku'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-primary btn-sm">Hapus</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>