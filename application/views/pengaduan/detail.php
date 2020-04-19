<div class="col-lg col-md col-sm col-12">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('admin/pengaduan') ?>">Data Pengaduan</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $pengaduan->nama ?></li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:390px">
    <div class="h3 text-muted mb-3">Detail Pengaduan</div>
    <div class="row justify-content-center">

      <div class="col-lg-12">
        <div class="card shadow-sm border-light">
          <div class="card-body">

            <div class="h5 text-muted">Data Pelapor</div>

            <div class="pl-3">
              <div class="row no-gutters py-1">
                <div class="col-2">
                  Atas Nama
                </div>
                <div class="col-6">
                  : <?= ucwords($pengaduan->nama) ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  NIK
                </div>
                <div class="col-6">
                  : <?= $pengaduan->nik ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Telepon
                </div>
                <div class="col-6">
                  : <?= $pengaduan->telp ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Tanggal
                </div>
                <div class="col-6">
                  : <?= $pengaduan->date ?>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="card shadow-sm border-light mt-3">
          <div class="card-body">
            <div class="h5 text-muted">Isi Laporan</div>
            <div class="card mx-3">
              <div class="card-body">
                <p><?= $pengaduan->laporan ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm border-light mt-3">
          <div class="card-body">
            <div class="h5 text-muted">Gambar</div>
            <div class="row no-gutters">
              <?php foreach ($img as $img) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 py-1 px-1">
                  <img src="<?= base_url('assets/img/pengaduan/' . $img->img) ?>" alt="" width="250" style="height:200px" class="img-thumbnail">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>