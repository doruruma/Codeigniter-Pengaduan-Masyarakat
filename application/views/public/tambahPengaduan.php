<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white shadow-sm">
    <li class="breadcrumb-item"><a href="<?= base_url('user/home') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Buat Pengaduan</li>
  </ol>
</nav>

<div class="container" style="min-height:730px">

  <div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

  <div class="h2 text-center text-muted mt-5">Ajukan Pengaduan</div>

  <div class="row justify-content-center mt-2">
    <div class="col-lg-10 col-12">
      <div class="card shadow-sm">
        <div class="card-body">

          <div class="form-group">
            <label for="" class="d-block">Sisipkan Gambar</label>
            <img src="<?= base_url('assets/img/default_profile.png') ?>" class="img-thumbnail" style="width:200px">
          </div>

          <div class="form-group">
            <!-- <label for="img">Sisipkan Gambar</label> -->
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
            </div>
          </div>

          <div class="form-group">
            <label for="aduan">Aduan</label>
            <textarea name="aduan" id="aduan" rows="4" class="form-control"></textarea>
          </div>

          <div class="form-group mt-3">
            <button type="submit" class="btn btn btn-primary">Submit</button>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>