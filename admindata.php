<!DOCTYPE html>
<html>
 <?php
  include "touchpoint.php";
  ?>
  <body>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-16">
          <div class="card">
            <div class="card-header">
               DATA ADMIN
            </div>
            <div class="card-body">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO. IDENTITAS</th>
                    <th scope="col">NO. HANDPHONE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   include "connect.php";
                    $qry_admin=mysqli_query($conn,"select * from admin");
                    $no=0;
                     while($data_admin=mysqli_fetch_array($qry_admin)){
                    $no++;?>
                    <tr>
                  <td><?=$no?></td>
                  <td><?=$data_admin['nama']?></td> 
                  <td><?=$data_admin['tgl_lahir']?></td> 
                  <td><?=$data_admin['alamat']?></td> 
                  <td><?=$data_admin['no_identitas']?></td>
                  <td><?=$data_admin['no_hp']?></td>
                  <td><?=$data_admin['email']?></td> 
                  <td><?=$data_admin['username']?></td> 
                 <td><a href="edit_admin.php?id_admin=<?=$data_admin['id_admin']?>" class="btn btn-success btn-primary btn-sm">Ubah</a> | <a href="delete_admin.php?id_admin=<?=$data_admin['id_admin']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-primary btn-sm">Hapus</a></td>
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