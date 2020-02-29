<div class="row no-gutters">

  <div class="col-lg-2 col-md-2 col-sm-1 d-sm-block d-none card shadow" id="sidebar">

    <nav class="nav flex-column d-sm-none d-md-block d-none ml-3 pt-5 mt-3">
      <a class="font-weight-bold nav-link text-white active" href="<?= base_url('pengaduan') ?>"><i class="fas px-1 fa-file"></i> Pengaduan</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('petugas') ?>"><i class="fas px-1 fa-user-tie"></i> Petugas</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('pengaduan/ditanggapi') ?>"><i class="fas px-1 fa-map"></i> Ditanggapi</a>
      <hr>
      <a class="font-weight-bold nav-link text-white" href="<?= base_url('masyarakat') ?>"><i class="fas px-1 fa-users"></i> Masyarakat</a>
    </nav>

    <nav class="nav flex-column d-md-none pt-5 mt-3">
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-file"></i></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= base_url('pengaduan') ?>">Data Pengaduan</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-user-tie"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('petugas/tambah') ?>" class="dropdown-item">Register Petugas</a>
          <a href="<?= base_url('petugas') ?>" class="dropdown-item">Data Petugas</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-map"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('pengaduan/ditanggapi') ?>" class="dropdown-item">Data Pengaduan Ditanggapi</a>
        </div>
      </div>
      <div class="dropright">
        <a class="py-4 font-weight-bold nav-link text-white" data-toggle="dropdown"><i class="fas fa-fw fa-lg fa-users"></i></a>
        <div class="dropdown-menu">
          <a href="<?= base_url('masyarakat') ?>" class="dropdown-item">Data Masyarakat</a>
        </div>
      </div>
    </nav>

  </div>