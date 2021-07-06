<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('backend/dashboard')?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MODAS</div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">
      NAVIGASI
    </div>

    <!-- Nav Item - Dashboard -->
    <?php if ('Dashboard' != $judul) :?>
    <li class="nav-item">
      <?php else :?>
    <li class="nav-item active">
      <?php endif;?>
      <a class="nav-link" href="<?= base_url('backend/dashboard');?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      MONITORING
    </div>

    <!-- Nav Item - Dashboard -->
    <?php if ('Monitoring' != $judul) :?>
    <li class="nav-item">
      <?php else :?>
    <li class="nav-item active">
      <?php endif;?>
      <a class="nav-link" href="<?= base_url('backend/monitoring');?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Monitoring Nilai</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      TABLE DATA
    </div>

    <!-- Nav Item - data guru Collapse Menu -->
    <?php if ('Guru' != $judul && 'Absen' != $judul && 'Nilai' != $judul && 'Mapel' != $judul && 'Kelas' != $judul) :?>
    <li class="nav-item">
      <?php else :?>
    <li class="nav-item active">
      <?php endif;?>


      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-table"></i>
        <span>Data</span>
      </a>

      <?php if ('Guru' != $judul && 'Absen' != $judul && 'Nilai' != $judul && 'Mapel' != $judul && 'Kelas' != $judul) :?>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <?php else :?>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <?php endif;?>

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Managemen Data Guru:</h6>
            <?php if ('Guru' != $judul) :?>
            <a class="collapse-item" href="<?= base_url('backend/data_guru');?>">Data Guru</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('backend/data_guru');?>">Data Guru</a>
            <?php endif;?>

            <h6 class="collapse-header">Managemen Data Absen:</h6>
            <?php if ('Absen' != $judul) :?>
            <a class="collapse-item " href="<?= base_url('backend/data_absen');?>">Data Absen</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('backend/data_absen');?>">Data Absen</a>
            <?php endif;?>

            <h6 class="collapse-header">Managemen Data Nilai:</h6>
            <?php if ('Nilai' != $judul) :?>
            <a class="collapse-item" href="<?= base_url('backend/data_nilai');?>">Data Nilai</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('backend/data_nilai');?>">Data Nilai</a>
            <?php endif;?>

            <h6 class="collapse-header">Managemen Data Mapel:</h6>
            <?php if ('Mapel' != $judul) :?>
            <a class="collapse-item" href="<?= base_url('backend/data_mapel');?>">Data Mapel</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('backend/data_mapel');?>">Data Mapel</a>
            <?php endif;?>

            <h6 class="collapse-header">Managemen Data Kelas:</h6>
            <?php if ('Kelas' != $judul) :?>
            <a class="collapse-item" href="<?= base_url('backend/data_kelas');?>">Data Kelas</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('backend/data_kelas');?>">Data Kelas</a>
            <?php endif;?>
          </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      PENGATURAN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if ('Users' != $judul && 'Profile' != $judul && 'Jenis' != $judul && 'Siswa' != $judul): ?>
    <li class="nav-item">
      <?php else:?>
    <li class="nav-item active">
      <?php endif;?>
      <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-users"></i>
        <span>User Managemen</span>
      </a>
      <?php if ('Users' != $judul && 'Profile' != $judul && 'Jenis' != $judul && 'Siswa' != $judul): ?>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <?php else:?>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <?php endif;?>
          <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Data Users</h6>
            <?php if('Users' != $judul):?>
            <a class="collapse-item" href="<?= base_url('backend/users');?>">User</a>
            <?php else:?>
            <a class="collapse-item active" href="<?= base_url('backend/users');?>">User</a>
            <?php endif;?>

            <?php if('Profile' != $judul):?>
            <a class="collapse-item " href="<?= base_url('backend/profile');?>">Profile</a>
            <?php else:?>
            <a class="collapse-item active" href="<?= base_url('backend/profile');?>">Profile</a>
            <?php endif;?>

            <div class="collapse-divider"></div>

            <h6 class="collapse-header">Data Jenis User</h6>
            <?php if('Jenis' != $judul):?>
            <a class="collapse-item" href="<?= base_url('backend/jenis_user');?>">Jenis User</a>
            <?php else:?>
            <a class="collapse-item active" href="<?= base_url('backend/jenis_user');?>">Jenis User</a>
            <?php endif;?>

            <h6 class="collapse-header">Data Siswa</h6>
            <?php if('Siswa' != $judul):?>
            <a class="collapse-item" href="<?= base_url('backend/data_siswa');?>">Data Siswa</a>
            <?php else:?>
            <a class="collapse-item active" href="<?= base_url('backend/data_siswa');?>">Data Siswa</a>
            <?php endif;?>

          </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
              aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>