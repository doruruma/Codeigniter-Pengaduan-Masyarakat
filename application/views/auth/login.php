<div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

<div class="container" style="margin-top:80px;min-height:439px">
  <div class="row justify-content-center">

    <div class="col-lg-5 col-md-6 col-sm-12">
      <div class="h4 text-center text-muted mb-3">Sign In Pengguna</div>
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="" method="POST">

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
              <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
            <div class="text-center">
              <a href="<?= base_url('auth') ?>" class="btn-link btn-sm">Register Here</a>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</div>