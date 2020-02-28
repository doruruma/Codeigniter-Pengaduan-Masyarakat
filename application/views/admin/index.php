<div class="col-lg col-md col-sm mb-5">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <div class="container" style="margin-top:40px; min-height:410px">
    <div class="h3 text-muted mb-4">Main Menu</div>
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
            <a href="<?= base_url('petugas/') ?>" class="btn-link btn-sm font-weight-bold px-2">Selengkapnya</a>
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
            <a href="#" class="btn-link btn-sm font-weight-bold px-2">Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
</div>