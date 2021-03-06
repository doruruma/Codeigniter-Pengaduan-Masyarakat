<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:390px">
    <div class="h3 text-muted mb-2">Data Petugas</div>
    <div class="row">

      <div class="col-12">
        <a href="<?= base_url('admin/petugas/tambah') ?>" class="btn btn-sm mb-2 btn-primary <?= $this->session->userdata('user')['level'] == 2 ? 'disabled' : '' ?>">Tambah Petugas</a>
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Telepon</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($petugas as $p) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $p->nama ?></td>
                      <td><?= $p->username ?></td>
                      <td><?= $p->telp ?></td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-info my-1 font-weight-bold <?= $this->session->user['level'] == 2 ? 'disabled' : '' ?>" href="<?= base_url('admin/petugas/edit/' . $p->id) ?>"><i class="fas fa-sm fa-fw fa-pen"></i></a>
                        <a class="btn btn-sm btn-danger my-1 font-weight-bold btnDelete <?= $this->session->user['level'] == 2 ? 'disabled' : '' ?>" href="#" data-id="<?= $p->id ?>"><i class="fas fa-sm fa-fw fa-trash-alt"></i></a>
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
  </div>