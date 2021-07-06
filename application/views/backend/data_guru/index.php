<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Guru</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
    </div>
    <div class="card-body">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
      <?= form_error('njp', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('pend_terakhir', '<div class="alert alert-danger" role="alert">','</div>');?>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addguru"><i class="fa fa-plus"></i>
        Guru</a>
      <a href="<?= base_url('export/laporan_pdf')?>" class="btn btn-danger float-right"><i class="fas fa-file-pdf"></i>
        PDF</a>
      <a href="<?= base_url('export/laporan_excel')?>" class="btn btn-success float-right mr-2"><i
          class="fas fa-file-excel"></i> EXCEL</a>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;"> </th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">No.</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NJP</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Nama</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Pendidikan
                Terkahir</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">L/P
              </th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NUPTK</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">NRG</th>
              <th colspan="2" class="text-center" style="vertical-align:middle; text-align:center;">Status
                Sertifikasi</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">No. Sertifikat
              </th>
              <th class="text-center" colspan="5" style="vertical-align:middle; text-align:center;">Melaksanakan
                Tugas Mengajar dan Tugas Lain Sesuai SK</th>
              <th class="text-center" rowspan="3" style="vertical-align:middle; text-align:center;">Keterangan
              </th>
            </tr>

            <tr>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Sudah</th>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Belum</th>
              <th style="vertical-align:middle; text-align:center;" rowspan="2">Mapel yang diajarkan dan Tugas
                Lain</th>
              <th style="vertical-align:middle; text-align:center;" colspan="4">Kelas dan Jam</th>
            </tr>
            <tr>
              <th style="vertical-align:middle; text-align:center;">VII</th>
              <th style="vertical-align:middle; text-align:center;">VIII</th>
              <th style="vertical-align:middle; text-align:center;">IX</th>
              <th style="vertical-align:middle; text-align:center;">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
                  $total = 0;
                  $no = 1;
                  foreach ($data_guru as $guru):
                  ?>
            <tr>
              <td style="vertical-align:middle; text-align:center;">

                <a href="javascript:;" class="badge badge-warning" data-toggle="modal"
                  data-target="#updateguru<?= $guru['id']?>"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url('backend/data_guru/delete_guru/') . $guru['id'] ?>" class="badge badge-danger"><i
                    class="fas fa-fw fa-trash"></i></a>

              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $no++; ?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['njp'];?></td>
              <td style="vertical-align:middle;"><?= $guru['nama'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['pend_terakhir'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['jenis_kelamin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['nuptk'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['nrg'];?></td>
              <td style="vertical-align:middle; text-align:center;">
                <div class="form-check">
                  <?php if($guru['status_sertifikasi'] != 1):?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                  <?php else:?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                  <?php endif;?>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;">
                <div class="form-check">
                  <?php if($guru['status_sertifikasi'] != 0):?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                  <?php else:?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                  <?php endif;?>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['no_sertifikasi'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['mapel'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_vii'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_viii'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['kelas_ix'];?></td>
              <td style="vertical-align:middle; text-align:center;">
                <?= $guru['kelas_vii']+$guru['kelas_viii']+$guru['kelas_ix'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $guru['keterangan'];?></td>

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
<div class="modal fade" id="addguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_guru/add_guru')?>" method="post">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="njp">NJP <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="njp" name="njp">
                </div>
              </div>
            </div>

            <div class="col-md-6">
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
                <label for="pend_terakhir">Pendidikan Terakhir <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir">
                </div>
                <?= form_error('pend_terakhir','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="input-group">
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="">Pilih...</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nuptk">NUPTK</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nuptk" name="nuptk">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nrg">NRG</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nrg" name="nrg">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="status_sertifikasi">Status Sertifikasi</label>
                <div class="input-group">
                  <select name="status_sertifikasi" class="form-control" id="status_sertifikasi">
                    <option value="">Pilih...</option>
                    <option value="<?= $status_sertifikasi['id'];?>"><?= $status_sertifikasi['nama_status'];?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="no_sertifikasi">No. Sertifikasi</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <div class="input-group">
              <input type="text" class="form-control" id="mapel" name="mapel">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_vii">Kelas dan Jam (VII)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_vii" name="kelas_vii">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_viii">Kelas dan Jam (VIII)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_viii" name="kelas_viii">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_ix">Kelas dan Jam (IX)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_ix" name="kelas_ix">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="kelas_ix">Keterangan</label>
            <div class="input-group">
              <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- update User Modal-->
<?php foreach($data_guru as $data_guru):?>
<div class="modal fade" id="updateguru<?= $data_guru['id']?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_guru/update_guru')?>" method="post">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="njp">NJP <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="hidden" id="id" name="id" value="<?= $data_guru['id']?>">
                  <input type="text" class="form-control" id="njp" name="njp" value="<?= $data_guru['njp']?>">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_guru['nama']?>">
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="pend_terakhir">Pendidikan Terakhir <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir"
                    value="<?= $data_guru['pend_terakhir']?>">
                </div>
                <?= form_error('pend_terakhir','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="input-group">
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="<?= $data_guru['jenis_kelamin']?>"><?= $data_guru['jenis_kelamin']?></option>
                    <option value="">Pilih...</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nuptk">NUPTK</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nuptk" name="nuptk" value="<?= $data_guru['nuptk']?>">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nrg">NRG</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nrg" name="nrg" value="<?= $data_guru['nrg']?>">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="status_sertifikasi">Status Sertifikasi</label>
                <div class="input-group">
                  <select name="status_sertifikasi" class="form-control" id="status_sertifikasi">
                    <option value="">Pilih...</option>
                    <option value="<?= $status_sertifikasi['id'];?>"><?= $status_sertifikasi['nama_status'];?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="no_sertifikasi">No. Sertifikasi</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="no_sertifikasi" name="no_sertifikasi"
                    value="<?= $data_guru['no_sertifikasi']?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <div class="input-group">
              <input type="text" class="form-control" id="mapel" name="mapel" value="<?= $data_guru['mapel']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_vii">Kelas dan Jam (VII)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_vii" name="kelas_vii"
                    value="<?= $data_guru['kelas_vii']?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_viii">Kelas dan Jam (VIII)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_viii" name="kelas_viii"
                    value="<?= $data_guru['kelas_viii']?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelas_ix">Kelas dan Jam (IX)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="kelas_ix" name="kelas_ix"
                    value="<?= $data_guru['kelas_ix']?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="kelas_ix">Keterangan</label>
            <div class="input-group">
              <textarea name="keterangan" id="keterangan" class="form-control" cols="30"
                rows="5"><?= $data_guru['keterangan']?></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end update data -->