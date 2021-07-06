<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Modas &copy; Monitoring Data Siswa <?= date("Y")?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin logout?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Logout" jika anda ingin keluar dai aplikasi.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/login/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Add User Modal-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data User</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/users/add_user')?>" method="post">

          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <div class="input-group">
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group">
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>

          <div class="form-group">
            <label for="konf_pass">Konfirmasi Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="konf_pass" name="konf_pass" required>
            </div>
          </div>

          <div class="form-group">
            <label for="user_id">Tipe User</label>
            <div class="input-group">
              <select name="user_id" class="form-control" id="user_id">
                <?php foreach ($user_role as $user) :?>
                <option value="<?= $user['id'];?>"><?= $user['tipe_user'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- Update User Modal-->
<div class="modal fade" id="updateuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/users/update_user')?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <div class="input-group">
              <input type="hidden" id="id" name="id">
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group">
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>

          <div class="form-group">
            <label for="konf_pass">Konfirmasi Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="konf_pass" name="konf_pass" required>
            </div>
          </div>

          <div class="form-group">
            <label for="user_id">Tipe User</label>
            <div class="input-group">
              <select name="user_id" class="form-control" id="tipe_user">
                <?php foreach ($user_role as $user) :?>
                <option value="<?= $user['id'];?>"><?= $user['tipe_user'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end update user -->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/back/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset/back/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/back/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/back/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/back/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/back/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/back/'); ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('asset/back/') ?>plugin/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('asset/back/') ?>plugin/sweetalert2/myscript.js"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
  $('.custom-control-input').click(function() {
    if ($(this).is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#example1').DataTable();
});

$(document).ready(function() {
  $('#example2').DataTable();
});
</script>

</body>

</html>