<div class="col-lg col-md col-sm col-12">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('admin/ditanggapi') ?>">Data Tanggapan</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $ditanggapi->nama ?></li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:390px">
    <div class="h3 text-muted mb-3">Detail Tanggapan</div>
    <div class="row justify-content-center">

      <div class="col-lg-12">
        <div class="card shadow-sm border-light mb-3">
          <div class="card-body">

            <div class="h5 text-muted">Isi Tanggapan</div>

            <div class="pl-3">
              <div class="row no-gutters py-1">
                <div class="col-2">
                  Petugas
                </div>
                <div class="col-6">
                  : <?= ucwords($ditanggapi->petugas) ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Tanggal
                </div>
                <div class="col-6">
                  : <?= ucwords($ditanggapi->tanggap_date) ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Isi
                </div>
                <div class="col mr-3">
                  <div class="card">
                    <div class="card-body">
                      <p><?= $ditanggapi->tanggapan ?></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

        <div class="h3 text-muted mb-3">Detail Pengaduan</div>
        <div class="card shadow-sm border-light mt-3">
          <div class="card-body">

            <div class="h5 text-muted">Data Pelapor</div>

            <div class="pl-3">
              <div class="row no-gutters py-1">
                <div class="col-2">
                  Atas Nama
                </div>
                <div class="col-6">
                  : <?= ucwords($ditanggapi->nama) ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  NIK
                </div>
                <div class="col-6">
                  : <?= $ditanggapi->nik ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Telepon
                </div>
                <div class="col-6">
                  : <?= $ditanggapi->telp ?>
                </div>
              </div>

              <div class="row no-gutters py-1">
                <div class="col-2">
                  Tanggal
                </div>
                <div class="col-6">
                  : <?= $ditanggapi->date ?>
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
                <p><?= $ditanggapi->laporan ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm border-light mt-3">
          <div class="card-body">
            <div class="h5 text-muted">Gambar</div>
          </div>
        </div>
      </div>

    </div>
  </div>