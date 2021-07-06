<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
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
    <?php if ('Absen' != $judul) :?>
    <li class="nav-item">
      <?php else :?>
    <li class="nav-item active">
      <?php endif;?>


      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-table"></i>
        <span>Data</span>
      </a>

      <?php if ('Absen' != $judul) :?>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <?php else :?>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <?php endif;?>

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Monitoring:</h6>
            <?php if ('Absen' != $judul) :?>
            <a class="collapse-item" href="<?= base_url('dashboard_siswa/dashboard_viia_1');?>">Absen Siswa</a>
            <?php else :?>
            <a class="collapse-item active" href="<?= base_url('dashboard_siswa/dashboard_viia_1');?>">Absen Siswa</a>
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