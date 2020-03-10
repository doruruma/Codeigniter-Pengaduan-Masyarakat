<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ubah Password</li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:450px">
    <div class="row justify-content-center">

      <div class="col-12">
        <div class="h4 text-muted mb-3">Ubah Password</div>
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <form action="" method="POST">

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="old">Password Lama</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="password" name="old" id="old" class="form-control form-control-sm">
                  <small class="text-danger"><?= form_error('old') ?></small>
                </div>
              </div>

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="old">Password Baru</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="password" name="new" id="new" class="form-control form-control-sm">
                  <small class="text-danger"><?= form_error('new') ?></small>
                </div>
              </div>

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="old">Konfirmasi Password</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="password" name="confirm" id="confirm" class="form-control form-control-sm">
                  <small class="text-danger"><?= form_error('confirm') ?></small>
                </div>
              </div>

              <div class="form-row py-2">
                <div class="col-lg-10 offset-lg-2 col-sm-9 offset-sm-3">
                  <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                </div>
              </div>

            </form>
          </div>
          <div class="card-footer bg-white radius">
            <a href="<?= base_url('admin/profile/edit_profile') ?>" class="nav-link font-weight-bold">Edit Profile</a>
          </div>
        </div>
      </div>

    </div>
  </div>