<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data Masyarakat</li>
    </ol>
  </nav>

  <div class="container" style="margin-top:40px; min-height:390px">
    <div class="h3 text-muted mb-2">Data Masyarakat</div>
    <div class="row justify-content-center">

      <div class="col-lg-12">
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <table class="table">
              <thead>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telepon</th>
                <th></th>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($masyarakat as $m) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $m->nik ?></td>
                    <td><?= $m->nama ?></td>
                    <td><?= $m->username ?></td>
                    <td><?= $m->telp ?></td>
                    <td class="text-center">
                      <a class="btn btn-sm btn-info my-1 font-weight-bold disabled <?= $this->session->userdata('user')['level'] == 2 ? 'disabled' : '' ?>" href="<?= base_url('petugas/edit/' . $m->id) ?>"><i class="fas fa-sm fa-fw fa-pen"></i></a>
                      <a class="btn btn-sm btn-danger my-1 font-weight-bold btnDelete disabled <?= $this->session->userdata('user')['level'] == 2 ? 'disabled' : '' ?>" href="#" data-id="<?= $m->id ?>"><i class="fas fa-sm fa-fw fa-trash-alt"></i></a>
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