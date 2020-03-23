<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white shadow-sm">
    <li class="breadcrumb-item"><a href="<?= base_url('public/home') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Buat Pengaduan</li>
  </ol>
</nav>

<div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

<div class="container-fluid">

  <div class="h2 text-muted mt-4">Ajukan Pengaduan</div>

  <div class="row no-gutters justify-content-center">

    <div class="col-lg-6 col-12 px-1 py-1">
      <div class="card shadow-sm mt-3">
        <div class="card-header radius">
          Form
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="img1">Sisipkan Gambar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img1" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="img1">Pilih Gambar 1</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseImg2"><i class="fas fa-fw fa-plus"></i></button>
                </div>
              </div>
              <small><button class="btn btn-sm btn-link" type="button" data-toggle="collapse" data-target=".collapse">Show All</button></small>
            </div>

            <?php for ($i = 2; $i < 5; $i++) : ?>
              <div class="collapse" id="collapseImg<?= $i ?>">
                <div class="form-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="img<?= $i ?>" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="img<?= $i ?>">Pilih Gambar <?= $i ?></label>
                    </div>
                    <?php if ($i < 4) : ?>
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseImg<?= $i + 1 ?>"><i class="fas fa-fw fa-plus"></i></button>
                      </div>
                    <?php endif ?>
                  </div>
                </div>
              </div>
            <?php endfor ?>

            <hr>

            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input type="text" name="tempat" id="tempat" class="form-control">
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

    <div class="col-lg-6 px-1 py-1">
      <div class="card shadow-sm mt-3">
        <div class="card-header radius">
          Preview Gambar
        </div>
        <div class="card-body text-center">
          <!-- <div class="row justify-content-center no-gutters"> -->
            <img src="<?= base_url('assets/img/img_preview.png') ?>" class=" py-1 px-1 img1" style="width:40%">
            <img src="<?= base_url('assets/img/img_preview.png') ?>" class=" py-1 px-1 img2" style="width:40%">
            <img src="<?= base_url('assets/img/img_preview.png') ?>" class=" py-1 px-1 img3" style="width:40%">
            <img src="<?= base_url('assets/img/img_preview.png') ?>" class=" py-1 px-1 img4" style="width:40%">
          <!-- </div> -->
        </div>
      </div>
    </div>

  </div>

</div>