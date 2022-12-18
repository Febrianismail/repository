<?php
include 'connect.php';
$sqlProd = "SELECT * FROM tb_prodi";
$prodList = mysqli_query($conn, $sqlProd);

$idBuku = (isset($_GET['id_buku'])) ? $_GET['id_buku'] : '';
$qryEditBuku = mysqli_query($conn, "select * from tb_buku where id_buku='" . $idBuku . "'");
$dataEditBuku = mysqli_fetch_array($qryEditBuku);

if (isset($dataEditBuku)) {
    $judulBuku = $dataEditBuku['judul_buku'];
    $penulisBuku = $dataEditBuku['penulis_buku'];
    $prodiBuku = $dataEditBuku['prodi_buku'];
    $abstrakBuku = $dataEditBuku['abstrak_buku'];
    $fileBuku = $dataEditBuku['file_buku'];
    $typeBuku = $dataEditBuku['type_buku'];
} else {
    $judulBuku = "";
    $penulisBuku = "";
    $prodiBuku = "";
    $abstrakBuku = "";
    $fileBuku = "";
    $typeBuku = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Buku</title>
</head>

<body>
    <div>
        <form action="prosess_buku.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_buku" id="id_buku" value="<?= $idBuku ?>">
            <div>
                <label for="judul_buku">Judul</label>
                <input type="text" name="judul_buku" id="judul_buku" value="<?= $judulBuku ?>">
            </div>
            <div>
                <label for="penulis_buku">Penulis</label>
                <input type="text" name="penulis_buku" id="penulis_buku" value="<?= $penulisBuku ?>">
            </div>
            <div>
                <label for="prodi_buku">Prodi</label>
                <select name="prodi_buku" id="prodi_buku">
                    <option value="">==PILIH==</option>
                    <?php
                    foreach ($prodList as $prodValue) :
                    ?>
                        <?php if ($prodiBuku == $prodValue['id_prodi']) { ?>
                            <option value="<?= $prodValue['id_prodi'] ?>" selected><?= $prodValue['nama_prodi'] ?></option>
                        <?php } else { ?>
                            <option value="<?= $prodValue['id_prodi'] ?>"><?= $prodValue['nama_prodi'] ?></option>
                        <?php } ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="abstrak_buku">Abstrak</label>
                <textarea name="abstrak_buku" id="abstrak_buku" cols="30" rows="10"><?= $abstrakBuku ?></textarea>
            </div>
            <div>
                <label for="file_buku">Upload File</label>
                <input type="file" name="file_buku" id="file_buku">
            </div>
            <div>
                <label for="type_buku">Type Buku</label>
                <select name="type_buku" id="type_buku">
                    <option value="">==PILIH==</option>
                    <?php
                    if ($typeBuku == "skripsi") {
                    ?>
                        <option value="skripsi" selected>Skripsi</option>
                        <option value="tesis">Tesis</option>
                    <?php } elseif ($typeBuku == "tesis") { ?>
                        <option value="skripsi">Skripsi</option>
                        <option value="tesis" selected>Tesis</option>
                    <?php } else { ?>
                        <option value="skripsi">Skripsi</option>
                        <option value="tesis">Tesis</option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="submit" name="save" value="Save">
            </div>
        </form>
    </div>
</body>

</html>