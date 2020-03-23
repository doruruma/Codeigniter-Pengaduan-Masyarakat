<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white shadow-sm">
    <li class="breadcrumb-item"><a href="<?= base_url('public/home') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Histori Pengaduan</li>
  </ol>
</nav>

<div class="container" style="min-height:530px">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <div class="jumbotron mt-4">
    <h1 class="display-4">Histori Pengaduan Saya</h1>
    <div class="my-4"></div>
    <hr>
    <p class="lead">Anda Dapat Melihat Histori Pengaduan Anda Disini</p>
  </div>

  <div class="row no-gutters">
    <?php foreach ($pengaduan as $p) : ?>
      <div class="col-lg-3 col-md-4 col-sm-12 col-12">
        <div class="card radius shadow-sm" style="height:190px">
          <div class="card-header radius bg-white text-muted">
            <i class="fas fa-fw fa-calendar-alt"></i> <b><?= $p->date ?></b>
          </div>
          <div class="card-body">
            <?= $p->laporan ?>
          </div>
          <div class="card-footer radius text-muted">
            <b><?= $p->status ?></b>
            <b><a href="<?= base_url('public/pengaduan/detail/' . $p->id) ?>" class="float-right"><i class="fas fa-fw fa-eye"></i> lihat</a></b>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>