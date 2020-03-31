<div class="row no-gutters">

  <div class="col-lg-2 col-md-1 col-sm-1 d-sm-block d-none card shadow" id="sidebar">

    <nav class="nav flex-column d-sm-none d-lg-block d-none ml-3 pt-5 mt-3">
      <a class="font-weight-bold nav-link text-white active" href="<?= base_url('admin/dashboard') ?>"><i class="fas px-1 fa-tachometer-alt"></i> Dashboard</a>
      <hr>
      <a class="font-weight-bold nav-link text-white active" href="<?= base_url('admin/pengaduan') ?>"><i class="fas px-1 fa-file"></i> Pengaduan</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('admin/petugas') ?>"><i class="fas px-1 fa-user-tie"></i> Petugas</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('admin/ditanggapi') ?>"><i class="fas px-1 fa-map"></i> Ditanggapi</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('admin/masyarakat') ?>"><i class="fas px-1 fa-users"></i> Masyarakat</a>
    </nav>

    <nav class="nav flex-column d-block d-lg-none pt-5 mt-3">
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-file"></i></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('admin/pengaduan') ?>">Data Pengaduan</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-user-tie"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('admin/petugas/tambah') ?>" class="dropdown-item">Register Petugas</a>
          <a href="<?= base_url('admin/petugas') ?>" class="dropdown-item">Data Petugas</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-map"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('admin/ditanggapi') ?>" class="dropdown-item">Data Pengaduan Ditanggapi</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-users"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('admin/masyarakat') ?>" class="dropdown-item">Data Masyarakat</a>
        </div>
      </div>
    </nav>

  </div>