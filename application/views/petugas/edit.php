<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('petugas') ?>">Edit Petugas</a></li>
      <li class="breadcrumb-item" aria-current="page"><?= $petugas->nama ?></li>
    </ol>
  </nav>

  <div class="container" style="margin-top:40px; min-height:400px">
    <div class="row justify-content-center">

      <div class="col-lg-11 col-md-6 col-sm-12">
        <div class="h4 text-muted mb-3">EDIT PETUGAS</div>
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <form action="" method="POST">

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="<?= $petugas->nama ?>">
                <small class="text-danger"><?= form_error('nama') ?></small>
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?= $petugas->username ?>">
                <small class="text-danger"><?= form_error('username') ?></small>
              </div>
              
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telp" id="telp" class="form-control form-control-sm" placeholder="+62" value="<?= $petugas->telp ?>">
                <small class="text-danger"><?= form_error('telp') ?></small>
              </div>

              <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
