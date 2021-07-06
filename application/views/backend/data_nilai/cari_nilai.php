<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Nilai</h1>

  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel nilai</h6>
    </div>
    <div class="card-body">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary ml-2 mb-3" data-toggle="modal" data-target="#addnilai"><i
          class="fa fa-plus"></i> Nilai</a>
      <a href="<?= base_url('export/laporan_pdf/export_nilai_siswa/')?>" class="btn btn-danger float-right"><i
          class="fa fa-file-pdf"></i> PDF</a>

      <form action="<?= base_url('backend/data_nilai/cari_nilai/')?>" method="POST">
        <div class="row">

          <div class="col-md-2">
            <div class="form-group">
              <div class="form-input">
                <select name="id_kelas" id="id_kelas" class="form-control">
                  <?php foreach($data_kelas as $kelas_id):?>
                  <option value="<?= $kelas_id['id']?>" <?php if ($kelas_id['id'] == $get['kelas_id']) :?> selected
                    <?php endif;?>><?= $kelas_id['kelas']?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <div class="form-input">
                <select name="semester_id" class="form-control" id="semester_id">
                  <?php foreach ($data_semester as $semester):?>
                  <option value="<?= $semester['id_semester']?>"
                    <?php if ($semester['id_semester'] == $get_semester['semester_id']) :?> selected <?php endif;?>>
                    <?= $semester['semester']?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>
        </div>

      </form>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center" style="vertical-align:middle; text-align:center;"></th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">No.</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">NIS</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">
                NAMA SISWA(i)
              </th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">KELAS</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">P/L</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">SEMESTER</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TAHUN AJARAN</th>
              <th style="vertical-align:middle; text-align:center;">NILAI MATEMATIKA</th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TANGGAL BUAT
              </th>
              <th class="text-center" style="vertical-align:middle; text-align:center;">TANGGAL UPDATE
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
                  $no = 1;
                  foreach ($data_nilai as $nilai):
                  ?>
            <tr>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <a href="javascript:;" class="badge badge-warning" data-toggle="modal"
                  data-target="#updatenilai<?= $nilai['id'];?>"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/Data_nilai/delete_nilai/') . $nilai['id'] ?>"
                  class="badge badge-danger"><i class="fas fa-fw fa-trash"></i></a>
              </td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $no++;?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['nis'];?></td>
              <td><?= $nilai['nama'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['kelas'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['jenis_kelamin'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['semester'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['tahun'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;"><?= $nilai['nilai_mtk'];?>
              </td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['created_at'];?></td>
              <td class="text-center" style="vertical-align:middle; text-align:center;">
                <?= $nilai['updated_at'];?></td>

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

<!-- Add nilai kelas vii Modal-->
<div class="modal fade" id="addnilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add data nilai</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_nilai/')?>" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS </label>
                <div class="input-group">
                  <input type="number" class="form-control" id="nis" name="nis">
                </div>
              </div>
            </div>

            <div class="col-md 6">
              <div class="form-group">
                <label for="nama">Nama Lengkap <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="kelas_id" class="form-control" id="kelas_id">
                    <option value="">Pilih...</option>
                    <?php foreach ($data_kelas as $kelas):?>
                    <option value="<?= $kelas['id']?>"><?= $kelas['kelas']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('kelas_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin<b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="">Pilih...</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <?= form_error('jenis_kelamin','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="semester_id">Semester <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="semester_id" class="form-control" id="semester_id">
                    <option value="">Pilih...</option>
                    <?php foreach ($data_semester as $semester):?>
                    <option value="<?= $semester['id_semester']?>"><?= $semester['semester']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('semester_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="tahun">Tahun Ajaran</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="tahun" name="tahun">
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="nilai_mtk">Nilai MTK</label>
            <div class="input-group">
              <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- update nilai kelas vii Modal-->
<?php foreach($data_nilai as $data_nilai):?>
<div class="modal fade" id="updatenilai<?= $data_nilai['id']?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update data nilai</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_nilai/update_nilai/')?>" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS </label>
                <div class="input-group">
                  <input type="hidden" name="id" id="id" value="<?= $data_nilai['id']?>">
                  <input type="number" class="form-control" id="nis" name="nis" value="<?= $data_nilai['nis']?>">
                </div>
              </div>
            </div>

            <div class="col-md 6">
              <div class="form-group">
                <label for="nama">Nama Lengkap <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_nilai['nama']?>">
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="kelas_id" class="form-control" id="kelas_id">
                    <option value="">Pilih...</option>
                    <?php foreach ($data_kelas as $kelas):?>
                    <option value="<?= $kelas['id']?>">
                      <?= $kelas['kelas']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('kelas_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin<b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="<?= $data_nilai['jenis_kelamin']?>"><?= $data_nilai['jenis_kelamin']?></option>
                    <option value="">Pilih...</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <?= form_error('jenis_kelamin','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="semester_id">Semester <b style="color:red">*</b></label>
                <div class="input-group">
                  <select name="semester_id" class="form-control" id="semester_id">
                    <option value="<?= $data_nilai['semester_id']?>"><?= $data_nilai['semester']?></option>
                    <option value="">Pilih...</option>
                    <?php foreach ($data_semester as $semester):?>
                    <option value="<?= $semester['id_semester']?>"><?= $semester['semester']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <?= form_error('semester_id','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="tahun">Tahun Ajaran</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $data_nilai['tahun']?>">
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="nilai_mtk">Nilai MTK</label>
            <div class="input-group">
              <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk"
                value="<?= $data_nilai['nilai_mtk']?>">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php  endforeach;?>
<!-- end update data -->