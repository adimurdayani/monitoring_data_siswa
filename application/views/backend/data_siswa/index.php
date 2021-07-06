<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Siswa</h6>

      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('nis','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('kelas_id','<div class="alert alert-danger" role="alert">','</div>');?>
      <!-- <?= form_error('user_id','<div class="alert alert-danger" role="alert">','</div>');?> -->
      <?= form_error('password','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('konf_pass','<div class="alert alert-danger" role="alert">','</div>');?>
    </div>
    <div class="card-body">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addsiswa"><i class="fa fa-plus"></i>
        Siswa</a>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">AKSI</th>
              <th class="text-center">NO.</th>
              <th class="text-center">NIS</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">KELAS</th>
              <th class="text-center">TIPE USER</th>
              <th class="text-center">AKTIFASI</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                  $no=1;
                  foreach ($data_siswa as $siswa):?>
            <tr>

              <td class="text-center">
                <a href="" class="badge badge-warning" data-toggle="modal"
                  data-target="#updatesiswa<?= $siswa['id']?>"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/data_siswa/delete_data/') . $siswa['id'] ?>"
                  class="badge badge-danger"><i class="fas fa-fw fa-trash"></i></a>
              </td>
              <td class="text-center"><?= $no++?></td>
              <td class="text-center"><?= $siswa['nis']?></td>
              <td class="text-center"><?= $siswa['nama']?></td>
              <td class="text-center"><?= $siswa['nama_kelas'] ?></td>
              <td class="text-center"><?= $siswa['tipe_user'] ?></td>
              <td class="text-center">

                <?php if($siswa['actived_id'] != 1):?>
                <span class="badge rounded-pill  bg-danger">
                  <?php else:?>
                  <span class="badge rounded-pill  bg-success">
                    <?php endif;?>
                    <?php if($siswa['actived_id'] != 1):?>
                    <i class="fa fa-times text-white"></i>
                    <?php else:?>
                    <i class="fa fa-check text-white"></i>
                    <?php endif;?>
                  </span>

              </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Add User Modal-->
<div class="modal fade" id="addsiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data siswa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_siswa')?>" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="number" class="form-control" id="nis" name="nis" required>
                </div>
                <?= form_error('nis','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="password">Password <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?= form_error('password','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="conf_pass">Konfirmasi Password <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="conf_pass" name="conf_pass" required>
                </div>
                <?= form_error('conf_pass','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="kelas_id" id="kelas_id" class="form-control">
                    <option value="">Pilih...</option>
                    <?php foreach($data_kelas as $data):?>
                    <option value="<?= $data['id_kelas'];?>"><?= $data['nama_kelas'];?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('kelas_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_id">Tipe User <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="user_id" id="user_id" class="form-control">
                    <option value="">Pilih...</option>
                    <?php foreach($data_tipe_user as $data):?>
                    <option value="<?= $data['id'];?>"><?= $data['tipe_user'];?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('user_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-check">
              <input type="checkbox" class="form-control-check" name="actived_id" value="<?= $aktifasi = 1;?>"
                id="actived_id">
              <label for="actived_id">Active <b style="color:red">*</b></label>
            </div>
            <?= form_error('actived_id','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- Update User Modal-->
<?php foreach($data_siswa as $data_siswa):?>
<div class="modal fade" id="updatesiswa<?= $data_siswa['id']?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update data siswa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_siswa/update_data/')?>" method="post" enctype="multipart/form-data">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $data_siswa['id']?>">
                <label for="nis">NIS <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="number" class="form-control" id="nis" name="nis" value="<?= $data_siswa['nis']?>">
                </div>
                <?= form_error('nis','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_siswa['nama']?>">
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="password">Password <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?= form_error('password','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="conf_pass">Konfirmasi Password <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="conf_pass" name="conf_pass" required>
                </div>
                <?= form_error('conf_pass','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="kelas_id" id="kelas_id" class="form-control">
                    <option value="<?= $data_siswa['kelas_id']?>"><?= $data_siswa['nama_kelas']?></option>
                    <option value="">Pilih...</option>
                    <?php foreach($data_kelas as $data):?>
                    <option value="<?= $data['id_kelas'];?>"><?= $data['nama_kelas'];?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('kelas_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_id">Tipe User <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="user_id" id="user_id" class="form-control">
                    <option value="<?= $data_siswa['tipe_user']?>"><?= $data_siswa['tipe_user']?></option>
                    <option value="">Pilih...</option>
                    <?php foreach($data_tipe_user as $data):?>
                    <option value="<?= $data['id'];?>"><?= $data['tipe_user'];?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('user_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-check">
              <input type="checkbox" class="form-control-check" name="actived_id" value="<?= $aktifasi = 1;?>"
                id="actived_id">
              <label for="actived_id">Active <b style="color:red">*</b></label>
            </div>
            <?= form_error('actived_id','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end update data -->