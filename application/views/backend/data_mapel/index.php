<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Mapel</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Mapel</h6>
    </div>
    <div class="card-body">

      <?= form_error('nama_mapel', '<div class="alert alert-danger" role="alert">','</div>');?>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addmapel"><i class="fa fa-plus"></i>
        Mapel</a>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Mata Pelajaran</th>
              <th class="text-center">Created at</th>
              <th class="text-center">Updated at</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                  $no=1;
                  foreach ($data_mapel as $mapel):?>
            <tr>
              <td class="text-center"><?= $no++;?></td>
              <td><?= $mapel['nama_mapel'];?></td>
              <td class="text-center"><?= $mapel['created_at'];?></td>
              <td class="text-center"><?= $mapel['updated_at'];?></td>
              <td class="text-center">
                <a href="javascript:;" data-id="<?= $mapel['id'];?>" data-mapel="<?= $mapel['nama_mapel'];?>"
                  data-createdat="<?= $mapel['created_at'];?>" data-updatedat="<?= $mapel['updated_at'];?>"
                  class="badge badge-warning" data-toggle="modal" data-target="#updatemapel"><i
                    class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/data_mapel/delete_mapel/') . $mapel['id'] ?>"
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
<div class="modal fade" id="addmapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data mata pelajaran</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_mapel')?>" method="post">

          <div class="form-group">
            <label for="nama_mapel">Mata Pelajaran <b style="color:red">*</b></label>
            <div class="input-group">
              <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
            </div>
            <?= form_error('nama_mapel','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- Add User Modal-->
<div class="modal fade" id="updatemapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update data mata pelajaran</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_mapel/update_mapel/')?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nama_mapel">Mata Pelajaran <b style="color:red">*</b></label>
            <div class="input-group">
              <input type="hidden" id="id" name="id">
              <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
            </div>
            <?= form_error('nama_mapel','<div class="text-danger small" role="alert">','</div>');?>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->