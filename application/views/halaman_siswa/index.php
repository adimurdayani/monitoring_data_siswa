<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Siswa </h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Nilai: <?= $user_session['nama'];?></h6>

    </div>
    <div class="card-body">
      <a href="<?= base_url()?>" class="btn btn-danger mb-3 float-right mr-1"><i class="fas fa-file-pdf"></i> PDF</a>
      <a href="<?= base_url()?>" class="btn btn-success mb-3 float-right mr-1"><i class=" fas fa-file-excel"></i>
        EXCEL</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th rowspan="3" style="vertical-align:middle; text-align:center;"></th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NO.</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NIS</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">NAMA</th>
              <th rowspan="3" style="vertical-align:middle; text-align:center;">P/L</th>
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
            foreach($get_data as $get_data):?>
            <tr>
              <td style="vertical-align:middle; text-align:center;">
                <a href="" class="badge badge-warning"><i class="fas fa-pen"></i></a>
                <a href="" class="badge badge-danger"><i class="fas fa-trash"></i></a>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $no++;?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $user_session['nis'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['nama'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['kelamin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['minggu'];?></td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['senin'] == 1):?>checked disabled<?php endif;?>>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['selasa'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['rabu'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['kamis'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['jumat'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style=" text-align:center;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
                    <?php if ($get_data['saptu'] == 1):?>checked disabled<?php endif;?> disabled>
                </div>
              </td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['total']?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['alfa'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['sakit'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['izin'];?></td>
              <td style="vertical-align:middle; text-align:center;"><?= $get_data['keterangan'];?></td>
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