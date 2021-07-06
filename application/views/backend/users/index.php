<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data User</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
    </div>
    <div class="card-body">

      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('email','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('username','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('password','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('konf_pass','<div class="alert alert-danger" role="alert">','</div>');?>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#adduser">Add User</a>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Jenis Kelamin</th>
              <th class="text-center">Email</th>
              <th class="text-center">Username</th>
              <th class="text-center">Jenis User</th>
              <th class="text-center">Aktivasi</th>
              <th class="text-center">Tanggal Buat</th>
              <th class="text-center">Tanggal Update</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                  $no=1;
                  foreach ($users as $users):?>
            <tr>
              <td class="text-center"><?= $no++;?></td>
              <td><?= $users['nama'];?></td>
              <td><?= $users['jenis_kelamin'];?></td>
              <td><?= $users['email'];?></td>
              <td><?= $users['username'];?></td>
              <td><?= $users['tipe_user'];?></td>
              <td class="text-center">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($users['user_active'] == 1):?>checked disabled<?php endif;?>>
                  <label class="form-check-label" for="flexCheckCheckedDisabled">
                    <?php if ($users['user_active'] == 1):?>Active<?php endif;?>
                  </label>
                </div>

              </td>
              <td><?= $users['created_at'];?></td>
              <td><?= $users['updated_at'];?></td>
              <td class="text-center">
                <a href="javascript:;" data-id="<?= $users['id'];?>" data-nama="<?= $users['nama'];?>"
                  data-kelamin="<?= $users['jenis_kelamin'];?>" data-username="<?= $users['username'];?>"
                  data-email="<?= $users['email'];?>" data-tipeuser="<?= $users['tipe_user'];?>"
                  data-useractive="<?= $users['user_active'];?>" data-createdat="<?= $users['created_at'];?>"
                  data-updatedat="<?= $users['updated_at'];?>" class="badge badge-warning" data-toggle="modal"
                  data-target="#updateuser"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/users/delete_user/') . $users['id'] ?>" class="badge badge-danger"><i
                    class="fas fa-fw fa-trash"></i></a>
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