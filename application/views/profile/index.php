<div class="col-lg col-md col-sm col-">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm">
      <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
  </nav>

  <div class="container-fluid" style="margin-top:40px; min-height:450px">
    <div class="row justify-content-center">

      <div class="col-12">
        <div class="h4 text-muted mb-3">Profile Anda</div>
        <div class="card shadow-sm border-light">
          <div class="card-body mb-5">

            <div class="row no-gutters py-1 mt-3">
              <div class="col-2">Username</div>
              <div class="col-4">: <?= ucwords($petugas->username) ?></div>
            </div>
            
            <div class="row no-gutters py-1">
              <div class="col-2">Nama</div>
              <div class="col-4">: <?= ucwords($petugas->nama) ?></div>
            </div>

            <div class="row no-gutters py-1">
              <div class="col-2">Telepon</div>
              <div class="col-4">: <?= ucwords($petugas->telp) ?></div>
            </div>

            <div class="row no-gutters py-1">
              <div class="col-2">Role</div>
              <div class="col-4 text-info font-weight-bold">: <?= ucwords($petugas->level) ?></div>
            </div>

          </div>
          <div class="card-footer bg-white radius">
            <a href="<?= base_url('admin/profile/edit_profile') ?>" class="mx-2 font-weight-bold">Edit Profile</a>
            <a href="<?= base_url('admin/profile/change_password') ?>" class="mx-2 font-weight-bold">Ubah Password</a>
          </div>
        </div>
      </div>

    </div>
  </div>