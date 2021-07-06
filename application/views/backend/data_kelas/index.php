<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Kelas</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel kelas</h6>
    </div>
    <div class="card-body">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addkelas"><i class="fa fa-plus"></i>
        Kelas</a>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Kelas</th>
              <th class="text-center">Created at</th>
              <th class="text-center">Updated at</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                  $no=1;
                  foreach ($data_kelas as $kelas):?>
            <tr>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $kelas['nama_kelas'];?></td>
              <td class="text-center"><?= $kelas['created_at'];?></td>
              <td class="text-center"><?= $kelas['updated_at'];?></td>
              <td class="text-center">
                <a href="javascript:;" data-id="<?= $kelas['id_kelas'];?>" data-kelas="<?= $kelas['nama_kelas'];?>"
                  data-createdat="<?= $kelas['created_at'];?>" data-updatedat="<?= $kelas['updated_at'];?>"
                  class="badge badge-warning" data-toggle="modal" data-target="#updatekelas"><i
                    class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/data_kelas/delete_kelas/') . $kelas['id_kelas'] ?>"
                  class="badge badge-danger"><i class="fas fa-fw fa-trash"></i></a>
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
<div class="modal fade" id="addkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data kelas</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_kelas/')?>" method="post">

          <div class="form-group">
            <label for="nama_kelas">Kelas <b style="color:red">*</b></label>
            <div class="input-group">
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
            </div>
            <?= form_error('nama_kelas','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- UPDATE User Modal-->
<div class="modal fade" id="updatekelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data kelas</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_kelas/update_kelas/')?>" method="post">

          <div class="form-group">
            <label for="nama_kelas">Kelas <b style="color:red">*</b></label>
            <div class="input-group">
              <input type="hidden" id="id" name="id">
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
            </div>
            <?= form_error('nama_kelas','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end UPDATE data -->