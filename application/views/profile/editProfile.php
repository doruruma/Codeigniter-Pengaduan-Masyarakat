<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('admin/profile') ?>">Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:450px">
    <div class="row justify-content-center">

      <div class="col-12">
        <div class="h4 text-muted mb-3">Edit Profile</div>
        <div class="card shadow-sm border-light">
          <div class="card-body">
            <form action="" method="POST">

              <div class="form-row mb-2">
                <label for="img" class="col-lg-2 col-sm-3 col-form-label">Foto Profile</label>
                <div class="col-lg-6 col-sm-9">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row mb-3">
                <div class="col-lg-10 offset-lg-2 col-sm-9 offset-sm-3">
                  <img src="<?= base_url('assets/img/default_profile.png') ?>" alt="" class="img-thumbnail rounded-circle" style="width:150px">
                </div>
              </div>

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="nama">Nama</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="<?= $petugas->nama ?>">
                  <small class="text-danger"><?= form_error('nama') ?></small>
                </div>
              </div>

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="username">Username</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?= $petugas->username ?>">
                  <small class="text-danger"><?= form_error('username') ?></small>
                </div>
              </div>

              <div class="form-row">
                <label class="col-lg-2 col-sm-3 col-form-label" for="telp">Telepon</label>
                <div class="col-lg-10 col-sm-9">
                  <input type="text" name="telp" id="telp" class="form-control form-control-sm" placeholder="+62" value="<?= $petugas->telp ?>">
                  <small class="text-danger"><?= form_error('telp') ?></small>
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
            <a href="<?= base_url('admin/profile/change_password') ?>" class="mx-2 font-weight-bold">Ubah Password</a>
          </div>
        </div>
      </div>

    </div>
  </div>