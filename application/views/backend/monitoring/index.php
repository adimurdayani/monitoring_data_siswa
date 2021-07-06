<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Monitoring</h1>

  <!-- Dropdown Card Example -->
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Monitoring nilai siswa VII A</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Monitoring Nilai Siswa:</div>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/')?>">Monitoring Nilai Kelas VII A</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viib/')?>">Monitoring Nilai Kelas VII
            B</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viiia/')?>">Monitoring Nilai Kelas VIII
            A</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viiib/')?>">Monitoring Nilai Kelas VIII
            B</a>
        </div>
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
        <canvas id="line"></canvas>
      </div>
    </div>

    <div class="card-body">
      <div class="cart-area">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
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

                  foreach ($data_absen_siswa as $data):
                  
                  ?>
              <tr>
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


  <!-- Dropdown Card Example -->
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Monitoring kehadiran siswa VII A</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Monitoring Nilai Siswa:</div>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/')?>">Monitoring Nilai Kelas VII A</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viib/')?>">Monitoring Nilai Kelas VII
            B</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viiia/')?>">Monitoring Nilai Kelas VIII
            A</a>
          <a class="dropdown-item" href="<?= base_url('backend/monitoring/kelas_viiib/')?>">Monitoring Nilai Kelas VIII
            B</a>
        </div>
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
        <canvas id="myChart"></canvas>
      </div>
    </div>

    <div class="card-body">
      <div class="cart-area">
        <div class="table-responsive">
          <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
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
                  foreach ($data_nilai_siswa as $nilai):
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      <?php 
          $minggu = "";
          $no = 1;
          foreach ($data_absen as $data):

          $obj = $data['nama'];
          $minggu = "'$obj'".", ";
        ?>

      <?= $minggu;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Kehadiran Siswa Kelas VII A',
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [
        <?php 
          $absen = "";
          foreach ($data_absen as $data):

          $obj = $data['total'];
          $absen = "'$obj'".", ";
        ?>

        <?= $absen;?>

        <?php endforeach;?>
      ],
    }]
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        maxBarThickness: 50,
      }],
      yAxes: [{
        ticks: {
          padding: 10
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    }
  }
});
</script>

<script>
var ctx = document.getElementById("line");
var myBarChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
      <?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai as $d):

          $obj = $d['nama'];
          $nilai = "'$obj'".", ";
      ?>

      <?= $nilai;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: "Nilai Ulangan Matematika Kelas VII A",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [
        <?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai as $d):

          $obj = $d['nilai_mtk'];
          $nilai = "'$obj'".", ";
        ?>

        <?= $nilai;?>

        <?php endforeach;?>
      ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 10,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        maxBarThickness: 50,
      }],
      yAxes: [{
        ticks: {
          padding: 0
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 0,
      yPadding: 0,
      displayColors: false,
      caretPadding: 10
    },
  }
});
</script>