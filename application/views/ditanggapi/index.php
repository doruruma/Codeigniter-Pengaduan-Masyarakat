<div class="col-lg col-md col-sm col-12">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data Tanggapan Pengaduan</li>
    </ol>
  </nav>

  <div class="container" style="margin-top:40px; min-height:390px">
    <div class="h3 text-muted mb-3">Data Tanggapan Pengaduan</div>
    <div class="row justify-content-center">

      <div class="col-lg-12">
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <th>No</th>
                <th>Nik</th>
                <th>Pelapor</th>
                <th>Tanggal Ditanggapi</th>
                <th>Isi</th>
                <th></th>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($ditanggapi as $d) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $d->nik ?></td>
                    <td class=""><?= $d->nama ?></td>
                    <td><?= $d->date ?></td>
                    <td class="d-inline-block text-truncate" style="max-width: 200px"><?= $d->laporan ?></td>
                    <td class="text-center">
                      <a class="btn btn-sm btn-info my-1 font-weight-bold" href="<?= base_url('admin/ditanggapi/detail/' . $d->id) ?>"><i class="fas fa-sm fa-fw fa-search"></i></a>
                      <a class="btn btn-sm btn-danger my-1 font-weight-bold btnDelete <?= $this->session->user['level'] == 2 ? 'disabled' : '' ?>" href="#"><i class="fas fa-sm fa-fw fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <?php $no++ ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>