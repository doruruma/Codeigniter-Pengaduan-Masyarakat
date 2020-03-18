<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand text-info font-weight-bold" href="<?= base_url('') ?>">E-report</a>
    <button class="btn btn-outline-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-fw fa-bars text"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- admin -->
      <?php if (isset($this->session->user['level'])) : ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-dashboard">
            <a href="<?= base_url('admin') ?>" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item nav-profile">
            <a href="<?= base_url('admin/profile') ?>" class="nav-link">Profile</a>
          </li>
          <li class="nav-item">
            <form action="<?= base_url('admin/dashboard/logout') ?>" method="GET" class="d-none formLogoutAdmin"></form>
            <a class="nav-link btnLogoutAdmin" href="#">Logout</a>
          </li>
        </ul>
      <?php endif; ?>
      <!--  -->

      <!-- user -->
      <?php if (isset($this->session->user['nik'])) : ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-dashboard">
            <a href="<?= base_url('admin') ?>" class="nav-link">Pengaduan Saya</a>
          </li>
          <li class="nav-item nav-profile">
            <a href="<?= base_url('admin/profile') ?>" class="nav-link">Profile</a>
          </li>
          <li class="nav-item">
            <form action="<?= base_url('user/home/logout') ?>" method="GET" class="d-none formLogoutUser"></form>
            <a class="nav-link btnLogoutUser" href="#">Logout</a>
          </li>
        </ul>
      <?php endif; ?>
      <!--  -->

    </div>
  </div>
</nav>