<!DOCTYPE html>
<html lang="en">
  <?php
  include "header.php";
  ?>
  <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <?php
            include "connect.php";
            $qry_get_admin=mysqli_query($conn,"select * from admin where id_admin='".$_GET['id_admin']."'");
            $data_admin=mysqli_fetch_array($qry_get_admin);
            ?>
            <div class="card-header">
              Change Data Admin
            </div>
            <div class="card-body">
              <form action="check_editadmin.php" method="post">
                <input type="hidden" name="id_admin" value="<?php echo $_GET['id_admin']; ?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value= "<?=$data_admin['nama']?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" value= "<?=$data_admin['tgl_lahir']?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" class="form-control" rows="4" value= "<?=$data_admin['alamat']?>"></textarea>
                </div>
                <div class="form-group">
                  <label>No. Identitas</label>
                  <input type="text" name="no_identitas" class="form-control" value= "<?=$data_admin['no_identitas']?>">
                </div>
                <div class="form-group">
                  <label>No. Handphone</label>
                  <input type="text" name="no_hp" class="form-control" value= "<?=$data_admin['no_hp']?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value= "<?=$data_admin['email']?>">
                </div>
                <div class="form-group">
                  <label>username</label>
                  <input type="text" name="username" class="form-control" value= "<?=$data_admin['username']?>">
                </div>
                 <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" value= "">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>