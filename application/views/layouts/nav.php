<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand text-info font-weight-bold" href="<?= base_url('') ?>">E-report</a>
    <button class="btn btn-outline-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-fw fa-bars text"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-dashboard">
          <a href="<?= base_url('admin') ?>" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item nav-profile">
          <a href="<?= base_url('admin/profile') ?>" class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <form action="<?= base_url('admin/logout') ?>" method="GET" class="d-none formLogout"></form>
          <a class="nav-link btnLogout" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>