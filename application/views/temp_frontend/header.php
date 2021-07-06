<!-- start header -->
<header>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="<?= base_url('asset/front/')?>img/logo_sekolah1.png"
            alt="logo" /></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php if ('Home' != $judul ) :?>
          <li><a href="<?= base_url('')?>">Home</a></li>
          <?php else:?>
          <li class="active"><a href="<?= base_url('')?>">Home</a> </li>
          <?php endif;?>

          <?php if ('Tentang' != $judul) :?>
          <li><a href="<?= base_url('tentang')?>">Tentang</a></li>
          <?php else:?>
          <li class="active"><a href="<?= base_url('tentang')?>">Tentang</a></li>
          <?php endif;?>

          <?php if ('Monitoring' != $judul) :?>
          <li><a href="<?= base_url('monitoring_absen')?>">Monitoring Absensi</a> </li>
          <?php else:?>
          <li class="active"><a href="<?= base_url('Monitoring_absen')?>">Monitoring Absensi</a> </li>
          <?php endif;?>

          <?php if ('Login' != $judul) :?>
          <li><a href="<?= base_url('login_siswa')?>">Login</a> </li>
          <?php else:?>
          <li class="active"><a href="<?= base_url('login_siswa')?>">Login</a> </li>
          <?php endif;?>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- end header -->