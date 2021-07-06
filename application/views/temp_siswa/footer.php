<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Modas &copy;  Monitoring Data Siswa <?= date("Y")?></span>
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
        <a class="btn btn-primary" href="<?= base_url('login_siswa/logout') ?>">Logout</a>
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

$(document).ready(function() {
  // Untuk sunting
  $('#updateuser').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#jenis_kelamin').html(div.data('jenis_kelamin'));
    modal.find('#username').attr("value", div.data('username'));
    modal.find('#email').attr("value", div.data('email'));
    modal.find('#tipe_user').attr("value", div.data('tipe_user'));
    modal.find('#user_active').attr("value", div.data('user_active'));
    modal.find('#created_at').attr("value", div.data('created_at'));
    modal.find('#updated_at').attr("value", div.data('updated_at'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsen').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviib_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviia_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviib_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviiia_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviiib_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviiia_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasviiib_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasixa_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasixb_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasixa_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasixb_2').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateabsenkelasixa_1').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelamin').attr("value", div.data('kelamin'));
    modal.find('#minggu').attr("value", div.data('minggu'));
    modal.find('#senin').attr("value", div.data('senin'));
    modal.find('#selasa').attr("value", div.data('selasa'));
    modal.find('#rabu').attr("value", div.data('rabu'));
    modal.find('#kamis').attr("value", div.data('kamis'));
    modal.find('#jumat').attr("value", div.data('jumat'));
    modal.find('#saptu').attr("value", div.data('saptu'));
    modal.find('#alfa').attr("value", div.data('alfa'));
    modal.find('#sakit').attr("value", div.data('sakit'));
    modal.find('#izin').attr("value", div.data('izin'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});


$(document).ready(function() {
  // Untuk sunting
  $('#updateguru').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#njp').attr("value", div.data('njp'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#pend_terakhir').attr("value", div.data('pendterakhir'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nuptk').attr("value", div.data('nuptk'));
    modal.find('#nrg').attr("value", div.data('nrg'));
    modal.find('#status_sertifikasi').attr("value", div.data('statussertifikasi'));
    modal.find('#no_sertifikasi').attr("value", div.data('nosertifikasi'));
    modal.find('#mapel').attr("value", div.data('mapel'));
    modal.find('#kelas_vii').attr("value", div.data('kelasvii'));
    modal.find('#kelas_viii').attr("value", div.data('kelasviii'));
    modal.find('#kelas_ix').attr("value", div.data('kelasix'));
    modal.find('#keterangan').attr("value", div.data('keterangan'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatemapel').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama_mapel').attr("value", div.data('mapel'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatejenisuser').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#tipe_user').attr("value", div.data('nama'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatekelas').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama_kelas').attr("value", div.data('kelas'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilai').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasviii').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasix').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasviib').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasviic').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasviiib').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasviiic').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasixb').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatenilaikelasixc').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nis').attr("value", div.data('nis'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#kelas_id').attr("value", div.data('kelas'));
    modal.find('#jenis_kelamin').attr("value", div.data('kelamin'));
    modal.find('#nilai_mtk').attr("value", div.data('mtk'));
    modal.find('#nilai_ipa').attr("value", div.data('ipa'));
    modal.find('#nilai_ips').attr("value", div.data('ips'));
    modal.find('#nilai_b_indo').attr("value", div.data('indo'));
    modal.find('#nilai_b_inggris').attr("value", div.data('inggris'));
    modal.find('#nilai_a_islam').attr("value", div.data('islam'));
    modal.find('#nilai_a_kristen').attr("value", div.data('kristen'));
    modal.find('#nilai_penjas').attr("value", div.data('penjas'));
    modal.find('#nilai_pkn').attr("value", div.data('pkn'));
  });
});
</script>

</body>

</html>