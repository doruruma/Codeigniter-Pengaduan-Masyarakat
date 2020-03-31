<div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

<div class="container" style="margin-top:40px;min-height:439px">
  <div class="row justify-content-center">

    <div class="col-lg-5 col-md-6 col-sm-12">
      <div class="h4 text-center text-muted mb-3">Register</div>
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="" method="POST">

            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" name="nik" id="nik" class="form-control form-control-sm" value="<?= set_value('nik') ?>" autocomplete="off">
              <small class="text-danger"><?= form_error('nik') ?></small>
            </div>

            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="<?= set_value('nama') ?>" autocomplete="off">
              <small class="text-danger"><?= form_error('nama') ?></small>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?= set_value('username') ?>" autocomplete="off">
              <small class="text-danger"><?= form_error('username') ?></small>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control form-control-sm">
              <small class="text-danger"><?= form_error('password') ?></small>
            </div>

            <div class="form-group">
              <label for="telp">Telepon</label>
              <input type="text" name="telp" id="telp" class="form-control form-control-sm" value="<?= set_value('telp') ?>" autocomplete="off">
              <small class="text-danger"><?= form_error('telp') ?></small>
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Register Now</button>
            </div>
            <div class="text-center">
              <a href="<?= base_url('auth/login') ?>" class="btn-link btn-sm">Sign In Here</a>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</div>