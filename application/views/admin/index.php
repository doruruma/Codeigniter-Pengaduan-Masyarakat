<div class="col-lg-10 col-md-10 col-sm-11 col-12">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <div class="container" style="margin-top:40px">
    <div class="h3 text-muted">Main Menu</div>
    <div class="row no-gutters">

      <!-- <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius bg-primary shadow-sm">
          <div class="card-body text-white">
            <div class="h5"><i class="fas fa-fw fa-user-tie fa-lg"></i> Petugas</div>
            <div class="h2 text-center">12</div>
          </div>
          <div class="card-footer border-primary">
            <a href="<?= base_url('petugas') ?>" class="btn btn-sm btn-outline-light font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div> -->

      <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius shadow-sm">
          <div class="row no-gutters" style="height:100px">
            <div class="col-5 bg-primary text-center py-2 text-white">
              <div class="h2 mt-4"><i class="fas fa-fw fa-user-tie fa-lg"></i></div>
            </div>
            <div class="col-7 py-2 text-muted text-center">
              <div class="h5">Petugas</div>
              <div class="h4 mt-3">12</div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius bg-dark shadow-sm">
          <div class="card-body text-white">
            <div class="h5"><i class="fas fa-fw fa-file fa-lg"></i> Pengaduan</div>
            <div class="h2 text-center">128</div>
          </div>
          <div class="card-footer border-dark">
            <a href="<?= base_url('pengaduan') ?>" class="btn btn-sm btn-outline-light font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div> -->

      <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius shadow-sm">
          <div class="row no-gutters" style="height:100px">
            <div class="col-5 bg-danger text-center py-2 text-white">
              <div class="h2 mt-4"><i class="fas fa-fw fa-file fa-lg"></i></div>
            </div>
            <div class="col-7 py-2 text-muted text-center">
              <div class="h5">Pengaduan</div>
              <div class="h4 mt-3">982</div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius bg-info shadow-sm">
          <div class="card-body text-white">
            <div class="h5"><i class="fas fa-fw fa-map fa-lg"></i> Ditanggapi</div>
            <div class="h2 text-center">90</div>
          </div>
          <div class="card-footer border-info">
            <a href="<?= base_url('pengaduan/ditanggapi') ?>" class="btn btn-sm btn-outline-light font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div> -->

      <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius shadow-sm">
          <div class="row no-gutters" style="height:100px">
            <div class="col-5 bg-secondary text-center py-2 text-white">
              <div class="h2 mt-4"><i class="fas fa-fw fa-map fa-lg"></i></div>
            </div>
            <div class="col-7 py-2 text-muted text-center">
              <div class="h5">Ditanggapi</div>
              <div class="h4 mt-3">90</div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius bg-success shadow-sm">
          <div class="card-body text-white">
            <div class="h5"><i class="fas fa-fw fa-users fa-lg"></i> Masyarakat</div>
            <div class="h2 text-center">9280</div>
          </div>
          <div class="card-footer border-success">
            <a href="<?= base_url('masyarakat') ?>" class="btn btn-sm btn-outline-light font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div> -->

      <div class="col-lg-3 col-md-6 col-sm-6 px-1 py-1">
        <div class="card radius shadow-sm">
          <div class="row no-gutters" style="height:100px">
            <div class="col-5 bg-info text-center py-2 text-white">
              <div class="h2 mt-4"><i class="fas fa-fw fa-users fa-lg"></i></div>
            </div>
            <div class="col-7 py-2 text-muted text-center">
              <div class="h5">Masyarakat</div>
              <div class="h4 mt-3">9280</div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr>

    <div class="h4 text-muted mt-4">Data Terbaru</div>
    <div class="row no-gutters">

      <div class="col-lg-5 col-md-12 col-sm-12 px-1 py-1">
        <div class="card shadow-sm border-light" style="height:270px">
          <div class="card-body">
            <div class="h5 text-muted">Petugas</div>
            <table class="table">
              <thead class="thead-light">
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telepon</th>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($petugas as $petugas) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $petugas->nama ?></td>
                    <td><?= $petugas->username ?></td>
                    <td><?= $petugas->telp ?></td>
                  </tr>
                  <?php $no++ ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-white border-white">
            <a href="<?= base_url('petugas') ?>" class="btn-link btn-sm font-weight-bold px-2">Selengkapnya</a>
            <a href="<?= base_url('petugas/tambah') ?>" class="btn-link btn-sm font-weight-bold px-2">Tambah Petugas</a>
          </div>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 col-sm-12 px-1 py-1">
        <div class="card shadow-sm border-light" style="height:270px">
          <div class="card-body">
            <div class="h5 text-muted">Pengaduan</div>
            <table class="table">
              <thead class="thead-light">
                <th>No</th>
                <th>Nik</th>
                <th>Pelapor</th>
                <th>Tanggal</th>
                <th>Isi</th>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($pengaduan as $p) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $p->nik ?></td>
                    <td class=""><?= $p->nama ?></td>
                    <td><?= $p->date ?></td>
                    <td class="d-inline-block text-truncate" style="max-width: 200px"><?= $p->laporan ?></td>
                  </tr>
                  <?php $no++ ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-white border-white">
            <a href="<?= base_url('pengaduan') ?>" class="btn-link btn-sm font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-12 px-1 py-1">
        <div class="card shadow-sm border-light" style="height:270px">
          <div class="card-body">
            <div class="h5 text-muted">Pengaduan Ditanggapi</div>
            <table class="table">
              <thead class="thead-light">
                <th>No</th>
                <th>Nik</th>
                <th>Pelapor</th>
                <th>Tanggal</th>
                <th>Isi</th>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($pengaduan as $p) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $p->nik ?></td>
                    <td><?= $p->nama ?></td>
                    <td><?= $p->date ?></td>
                    <td><?= $p->laporan ?></td>
                  </tr>
                  <?php $no++ ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-white border-white">
            <a href="<?= base_url('pengaduan/ditanggapi') ?>" class="btn-link btn-sm font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>