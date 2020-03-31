<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white shadow-sm">
    <li class="breadcrumb-item"><a href="<?= base_url('public/home') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Buat Pengaduan</li>
  </ol>
</nav>

<div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

<div class="container-fluid">

  <div class="row no-gutters justify-content-center">

    <div class="col-lg-7 col-12 px-1 py-1">
      <div class="card shadow-sm mt-3">
        <div class="card-header radius">
          Harap Isi Form Pengaduan Dibawah
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="images">Sisipkan Gambar</label>
              <input type="file" name="images[]" id="images" class="d-block" multiple>
            </div>

            <div class="imgPreview text-center">

            </div>

            <hr>

            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input type="text" name="tempat" id="tempat" class="form-control">
              <small class="text-danger"><?= form_error('tempat') ?></small>
            </div>

            <div class="form-group">
              <label for="date">Tanggal Kejadian</label>
              <div class="input-group">
                <input type="date" name="date" id="date" class="form-control col-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-fw fa-calendar"></i></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="aduan">Aduan</label>
              <textarea name="aduan" id="aduan" rows="4" class="form-control"></textarea>
            </div>

            <div class="form-group mt-3">
              <button type="submit" class="btn btn btn-primary">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>

</div>