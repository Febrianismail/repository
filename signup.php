<!DOCTYPE html>
<html>
 <?php
  include "header.php";
  ?>
  <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Add Admin
            </div>
            <div class="card-body">
              <form action="check_signup.php" method="post">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" name="tgl_lahir" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label>No. Identitas</label>
                  <input type="text" name="no_identitas" class="form-control">
                </div>
                <div class="form-group">
                  <label>No. Handphone</label>
                  <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>