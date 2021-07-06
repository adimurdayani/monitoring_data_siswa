<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="pageTitle">Monitoring</h2>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">

    <div class="about">

      <div class="row">
        <div class="col-md-6">
          <div class="about-logo">
            <h3>Monitoring <Datal>Kehadiran Siswa Kelas VII A</Datal></span></h3>
            <canvas id="cardLine1"></canvas>
          </div>
        </div>

        <div class="col-md-6">
          <div class="about-logo">
            <h3>Monitoring <Datal>Kehadiran Siswa Kelas VII B</Datal></span></h3>
            <canvas id="cardLine2"></canvas>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="about-logo">
            <h3>Monitoring <Datal>Kehadiran Siswa Kelas VIII A</Datal></span></h3>
            <canvas id="cardLine3"></canvas>
          </div>
        </div>

        <div class="col-md-6">
          <div class="about-logo">
            <h3>Monitoring <Datal>Kehadiran Siswa Kelas VIII B</Datal></span></h3>
            <canvas id="cardLine4"></canvas>
          </div>
        </div>
      </div>

      <hr>
      <br>

      <div class="row">
        <div class="col-md-4">
          <!-- Heading and para -->
          <div class="block-heading-two">
            <h3><span>Kontak</span></h3>
          </div>
          Alamat : DESA MARIO<br>
          RT / RW : 0 / 0<br>
          Dusun : Mario<br>
          Desa / Kelurahan : Mario<br>
          Kecamatan : Kec. Baebunta<br>
          Kabupaten : Kab. Luwu Utara<br>
          Provinsi : Prov. Sulawesi Selatan<br>
          Kode Pos : 92965<br>
          Lintang : -2<br>
          Bujur : 120 <br>
          <i class="icon-phone"></i> Website: http://www.smpn4baebunta.com <br>
          <i class="icon-envelope-alt"></i>Email: rikotu90@gmail.com
        </div>
        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Identitas Sekolah</span></h3>
          </div>
          <ul class="link-list">
            <li><b>NPSN : 69761717</b> </li>
            <li><b>Status : Negeri</b></li>
            <li><b>Bentuk Pendidikan : SMP</b></li>
            <li><b>Status Kepemilikan : Pemerintah Daerah</b></li>
            <li><b>SK Pendirian Sekolah : 188.4.45/125/I/2018</b></li>
            <li><b>Tanggal SK Pendirian : 2018-02-01</b></li>
            <li><b>SK Izin Operasional : 188.4.45/125/I/2018</b></li>
            <li><b>Tanggal SK Izin Operasional : 2018-02-01</b></li>
          </ul>

        </div>

        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Data Rinci</span></h3>
          </div>
          <ul class="link-list">
            <li><b>Status BOS : Bersedia Menerima</b></li>
            <li><b>Waku Penyelenggaraan : Pagi</b></li>
            <li><b>Sertifikasi ISO : 9001:2000</b></li>
            <li><b>Sumber Listrik : PLN</b></li>
            <li><b>Daya Listrik : 900</b></li>
            <li><b>Akses Internet : Tidak Ada</b></li>
          </ul>
        </div>

      </div>



      <br>
      <!-- Our Team starts -->

      <!-- Heading -->
      <div class="block-heading-six">
        <h4 class="bg-color">Guru</h4>
      </div>
      <br>

      <!-- Our team starts -->

      <div class="team-six">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_1.svg" alt="">
              <!-- Name -->
              <h4>Hj. Rabaiyah, S.Ag</h4>
              <span class="deg">Kepala Sekolah</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_2.svg" alt="">
              <!-- Name -->
              <h4>Hiderana, S.Pd.</h4>
              <span class="deg">Guru Kelas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_3.svg" alt="">
              <img class="img-responsive" src="img/team3.jpg" alt="">
              <!-- Name -->
              <h4>Drs. Indar</h4>
              <span class="deg">Guru Kelas</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?= base_url('asset/back/')?>img/undraw_profile_1.svg" alt="">
              <!-- Name -->
              <h4>Masrial.S.Pd</h4>
              <span class="deg">Kepala Perpustakaan</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Our team ends -->


    </div>

  </div>
</section>


<script>
var ctx = document.getElementById('cardLine1');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      <?php 
          $minggu = "";
          $no = 1;
          foreach ($data_absen1 as $data):

          $obj = $no++;
          $minggu = "'$obj'".", ";
        ?>

      <?= $minggu;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Kehadiaran Siswa',
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [
        <?php 
          $absen = "";
          foreach ($data_absen1 as $data):

          $obj = $data['total'];
          $absen = "'$obj'".", ";
        ?>

        <?= $absen;?>

        <?php endforeach;?>
      ],

    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          padding: 10
        }
      }],
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    }
  }
});
</script>

<script>
var ctx = document.getElementById('cardLine2');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      <?php 
          $minggu = "";
          $no = 1;
          foreach ($data_absen2 as $data):

          $obj = $no++;
          $minggu = "'$obj'".", ";
        ?>

      <?= $minggu;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Kehadiaran Siswa',
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [
        <?php 
          $absen = "";
          foreach ($data_absen2 as $data):

          $obj = $data['total'];
          $absen = "'$obj'".", ";
        ?>

        <?= $absen;?>

        <?php endforeach;?>
      ],

    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          padding: 10
        }
      }],
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    }
  }
});
</script>

<script>
var ctx = document.getElementById('cardLine3');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      <?php 
          $minggu = "";
          $no = 1;
          foreach ($data_absen3 as $data):

          $obj = $no++;
          $minggu = "'$obj'".", ";
        ?>

      <?= $minggu;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Kehadiaran Siswa',
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [
        <?php 
          $absen = "";
          foreach ($data_absen3 as $data):

          $obj = $data['total'];
          $absen = "'$obj'".", ";
        ?>

        <?= $absen;?>

        <?php endforeach;?>
      ],

    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          padding: 10
        }
      }],
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    }
  }
});
</script>

<script>
var ctx = document.getElementById('cardLine4');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      <?php 
          $minggu = "";
          $no = 1;
          foreach ($data_absen4 as $data):

          $obj = $no++;
          $minggu = "'$obj'".", ";
        ?>

      <?= $minggu;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Kehadiaran Siswa',
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [
        <?php 
          $absen = "";
          foreach ($data_absen4 as $data):

          $obj = $data['total'];
          $absen = "'$obj'".", ";
        ?>

        <?= $absen;?>

        <?php endforeach;?>
      ],

    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          padding: 10
        }
      }],
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    }
  }
});
</script>