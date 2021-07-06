<section id="content">


  <div class="container">

    <div class="row">
      <div class="col-md-7">
        <!-- Heading and para -->
        <div class="block-heading-two">
          <h3><span>Apa itu monitoring?</span></h3>
        </div>
        <p>Monitoring dilakukan di saat kegiatan sedang berlangsung, hal tersebut untuk memastikan kesesuaian proses
          dan capaian sesuai rencana atau tidak. Jika ditemukan penyimpangan atau kelambatan maka segera dilakukan
          pembenahan sehingga kegiatan dapat berjalan sesuai dengan rencana dan targetnya. Sedangkan evaluasi
          dilakukan pada akhir kegiatan, untuk mengetahui hasil atau capaian akhir dari suatu program kegiatan. Hasil
          evaluasia bermanfaat bagi rencana pelaksanaan program kegiatan yang sama di waktu dan tempat lainnya.
        </p>



        <div class="block-heading-two">
          <h3><span>Monitoring</span></h3>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mointong nilai siswa</h5>
            <canvas id="myCardBar"></canvas>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mointong nilai siswa</h5>
            <canvas id="mycard"></canvas>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mointong nilai siswa</h5>
            <canvas id="mycard2"></canvas>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mointong nilai siswa</h5>
            <canvas id="mycard3"></canvas>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">

        <div class="latest-post-wrap pull-left">
          <h3><span>Berita</span></h3>

          <!--Post item-->
          <?php if(is_array($list)):?>
          <?php foreach($list as $data_list):?>
          <!--Post item-->
          <div class="post-item-wrap pull-left col-sm-6 col-md-12 col-xs-12">
            <div class="post-content1 pull-left col-md-9 col-sm-9 col-xs-8">
              <div class="post-title pull-left"><a href="<?= $data_list['link']?>"><?= $data_list['title']?></a></div>
              <div class="post-meta-top pull-left">
                <ul>
                  <li><i class="fa fa-calendar"></i><?= $data_list['pubDate']?></li>
                </ul>
              </div>
            </div>
            <div class="post-content2 pull-left">
              <p><?= $data_list['description']?></p>
              <?= $data_list['author']?><br>
              <span class="post-meta-bottom"><a href="<?= $data_list['link']?>">More...</a></span>
              </p>
            </div>
          </div>
          <?php endforeach;?>
          <?php endif;?>
        </div>
      </div>



    </div>

    <div class="row">
    </div>
  </div>

</section>

<script>
var ctx = document.getElementById('myCardBar');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai1 as $d):

          $obj = $no++;
          $nilai = "'$obj'".", ";
      ?>

      <?= $nilai;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Nilai Siswa VII A',
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
      data: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai1 as $d):

          $obj = $d['nilai_mtk'];
          $nilai = "'$obj'".", ";
        ?>

        <?= $nilai;?>

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
    },
  }
});
</script>


<script>
var ctx = document.getElementById('mycard');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai2 as $d):

          $obj = $no++;
          $nilai = "'$obj'".", ";
      ?>

      <?= $nilai;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Nilai Siswa VII B',
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
      data: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai2 as $d):

          $obj = $d['nilai_mtk'];
          $nilai = "'$obj'".", ";
        ?>

        <?= $nilai;?>

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
    },
  }
});
</script>

<script>
var ctx = document.getElementById('mycard2');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai3 as $d):

          $obj = $no++;
          $nilai = "'$obj'".", ";
      ?>

      <?= $nilai;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Nilai Siswa VIII A',
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
      data: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai3 as $d):

          $obj = $d['nilai_mtk'];
          $nilai = "'$obj'".", ";
        ?>

        <?= $nilai;?>

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
    },
  }
});
</script>


<script>
var ctx = document.getElementById('mycard3');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai4 as $d):

          $obj = $no++;
          $nilai = "'$obj'".", ";
      ?>

      <?= $nilai;?>

      <?php endforeach;?>
    ],
    datasets: [{
      label: 'Nilai Siswa VIII B',
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
      data: [<?php 
          $nilai = "";
          $no = 1;
          foreach($data_nilai4 as $d):

          $obj = $d['nilai_mtk'];
          $nilai = "'$obj'".", ";
        ?>

        <?= $nilai;?>

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
    },
  }
});
</script>