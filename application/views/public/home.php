<div class="container" style="min-height:530px">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <div class="jumbotron mt-4">
    <h1 class="display-4">Selamat Datang, <?= ucwords($this->session->user['username']) ?></h1>
    <p class="lead">Aplikasi Ini Memudahkan Pelaporan</p>
    <hr class="my-4">
    <p>Click Tombol Dibawah Untuk Membuat Pengaduan</p>
    <a class="btn btn-primary btn" href="<?= base_url('user/pengaduan') ?>" role="button">Buat Pengaduan</a>
  </div>

  <hr>

</div>