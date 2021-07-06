<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Absen</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Absen</h6>
    </div>
    <div class="card-body">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addabsen"><i class="fa fa-plus"></i>
        Absen</a>
      <a href="<?= base_url('export/laporan_pdf/export_data_absen_id/')?>" class="btn btn-danger float-right"><i class="fa fa-file-pdf"></i> PDF</a>

      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('kelamin', '<div class="alert alert-danger" role="alert">','</div>');?>

      <form action="<?= base_url('backend/data_absen/cari_data/')?>" method="POST">
        <div class="row">

          <div class="col-md-2">
            <div class="form-group">
              <div class="input-group">
                <select name="id_kelas" id="id_kelas" class="form-control">
                  <option value="0">--Kelas--</option>
                  <?php foreach($data_kelas as $kelas):?>
                  <option value="<?= $kelas['id']?>"><?= $kelas['kelas']?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <div class="input-group">
                <select name="id" id="id" class="form-control">
                  <option value="0">--Minggu--</option>
                  <?php foreach($data_minggu as $minggu):?>
                  <option value="<?= $minggu['id']?>"><?= $minggu['minggu']?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>

          <div class="col">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>

        </div>
      </form>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th rowspan="3" style="vertical-align:middle; text-align:center;"></th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NO.</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NIS</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NAMA</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">P/L</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">KELAS</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">M. KE</th>
              <th colspan="6" style="vertical-align:middle; text-align:center;">HARI/JAM
                PERTEMUAN</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">JUMLAH</th>
              <th rowspan="2" colspan="3" style="vertical-align:middle; text-align:center;">ABSEN</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">KET.</th>
            </tr>
            <tr>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SENIN</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SELASA</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">RABU</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">KAMIS</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">JUMAT</th>
              <th colspan="1" style="vertical-align:middle; text-align:center;">SAPTU</th>
            </tr>
            <tr>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">Hadir(1) / Alfa(2)</td>
              <td style="vertical-align:middle; text-align:center;">A</td>
              <td style="vertical-align:middle; text-align:center;">S</td>
              <td style="vertical-align:middle; text-align:center;">I</td>
            </tr>
          </thead>
          <tbody>
            <?php 
                  
                  $no = 1;

                  foreach ($data_absen as $data):
                  
                  ?>
            <tr>
              <td style="vertical-align:middle; text-align:center;">
                <a href="javascript:;" class="badge badge-warning" data-toggle="modal"
                  data-target="#updateabsen<?= $data['id'];?>"><i class="fas fa-pen"></i></a>
                <a href="<?= base_url('backend/data_absen/delete_absen/') . $data['id']?>" class="badge badge-danger"><i
                    class="fas fa-trash"></i></a>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $no++;?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['nis'];?></td>
              <td style="vertical-align:middle;"><?= $data['nama'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['kelamin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['kelas'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['minggu'];?></td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['senin'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['selasa'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['rabu'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['kamis'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['jumat'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($data['saptu'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;">
                <?= $data['total']?><?php if ($data['total'] > 1):?>

                <?php endif;?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['alfa'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['sakit'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['izin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $data['keterangan'];?></td>
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
<div class="modal fade" id="addabsen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data absen</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_absen/')?>" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="nis" name="nis">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group">
              <select name="kelamin" class="form-control" id="kelamin">
                <option value="">Pilih...</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <div class="input-group">
                  <select name="kelas_id" class="form-control" id="kelas_id">
                    <option value="">Pilih...</option>
                    <?php foreach($data_kelas as $data):?>
                    <option value="<?= $data['id']?>"><?= $data['kelas']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="minggu_ke">Minggu ke</label>
                <div class="input-group">
                  <select name="minggu_ke" class="form-control" id="minggu_ke">
                    <option value="">Pilih...</option>
                    <?php foreach($data_minggu as $data):?>
                    <option value="<?= $data['id']?>"><?= $data['minggu']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <center>
            <span><b>Hari/Jam Pertemuan</b></span>
          </center>
          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="senin">Senin</label>
                <div class="input-group">
                  <select name="senin" class="form-control" id="senin">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="selasa">Selasa</label>
                <div class="input-group">
                  <select name="selasa" class="form-control" id="selasa">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="rabu">Rabu</label>
                <div class="input-group">
                  <select name="rabu" class="form-control" id="rabu">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="kamis">Kamis</label>
                <div class="input-group">
                  <select name="kamis" class="form-control" id="kamis">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="jumat">Jumat</label>
                <div class="input-group">
                  <select name="jumat" class="form-control" id="jumat">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="saptu">Saptu</label>
                <div class="input-group">
                  <select name="saptu" class="form-control" id="saptu">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <center>
            <span><b>Absen</b></span>
          </center>
          <div class="form-group">
            <div class="row">

              <div class="col-lg-4">
                <label for="alfa">Alfa</label>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="alfa" name="alfa">
                </div>
              </div>

              <div class="col-lg-4">
                <label for="alfa">Sakit</label>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="sakit" name="sakit">
                </div>
              </div>

              <div class="col-lg-4">
                <label for="alfa">Izin</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="izin" name="izin">
                </div>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- end add data -->

<!-- update User Modal-->
<?php foreach($data_absen as $data_absen):?>
<div class="modal fade" id="updateabsen<?= $data_absen['id']?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data absen siswa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend/data_absen/update_absen/')?>" method="post">

          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS</label>
                <div class="input-group">
                  <input type="hidden" name="id" name="id" value="<?= $data_absen['id']?>">
                  <input type="number" class="form-control" id="nis" name="nis">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap <b style="color:red">*</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_absen['nama']?>">
                </div>
                <?= form_error('nama','<div class="text-danger small" role="alert">','</div>');?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="input-group">
              <select name="kelamin" class="form-control" id="kelamin">
                <option value="<?= $data_absen['kelamin']?>"><?= $data_absen['kelamin']?></option>
                <option value="">Pilih...</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <div class="input-group">
                  <select name="kelas_id" class="form-control" id="kelas_id">
                    <option value="<?= $data_absen['kelas_id']?>"><?= $data_absen['kelas']?></option>
                    <option value="">Pilih...</option>
                    <?php foreach($data_kelas as $data):?>
                    <option value="<?= $data['id']?>"><?= $data['kelas']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="minggu_ke">Minggu ke</label>
                <div class="input-group">
                  <select name="minggu_ke" class="form-control" id="minggu_ke">
                    <option value="<?= $data_absen['minggu_ke']?>"><?= $data_absen['minggu']?></option>
                    <option value="">Pilih...</option>
                    <?php foreach($data_minggu as $data):?>
                    <option value="<?= $data['id']?>"><?= $data['minggu']?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <center>
            <span><b>Hari/Jam Pertemuan</b></span>
          </center>
          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="senin">Senin</label>
                <div class="input-group">
                  <select name="senin" class="form-control" id="senin">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="selasa">Selasa</label>
                <div class="input-group">
                  <select name="selasa" class="form-control" id="selasa">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="rabu">Rabu</label>
                <div class="input-group">
                  <select name="rabu" class="form-control" id="rabu">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="kamis">Kamis</label>
                <div class="input-group">
                  <select name="kamis" class="form-control" id="kamis">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="jumat">Jumat</label>
                <div class="input-group">
                  <select name="jumat" class="form-control" id="jumat">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="saptu">Saptu</label>
                <div class="input-group">
                  <select name="saptu" class="form-control" id="saptu">
                    <option value="">Pilih...</option>
                    <option value="<?= $data_status['id']?>"><?= $data_status['status']?></option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <center>
            <span><b>Absen</b></span>
          </center>
          <div class="form-group">
            <div class="row">

              <div class="col-lg-4">
                <label for="alfa">Alfa</label>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="alfa" name="alfa">
                </div>
              </div>

              <div class="col-lg-4">
                <label for="alfa">Sakit</label>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="sakit" name="sakit">
                </div>
              </div>

              <div class="col-lg-4">
                <label for="alfa">Izin</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="izin" name="izin">
                </div>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end update data -->