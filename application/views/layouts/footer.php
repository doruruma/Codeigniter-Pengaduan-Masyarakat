  <!-- footer -->
  <div class="h6 py-4 bg-white shadow text-center mb-0">Copyright@2020</div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/popper.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- SweetAlert Plugin -->
  <script src="<?= base_url('assets/vendor/sweetalert2.all.min.js') ?>"></script>

  <!-- Custom Plugin -->
  <?php if(isset($pluginJS)) : ?>
    <?php foreach ($pluginJS as $js) : ?>
      <script src="<?= base_url('assets/vendor/' . $js) ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/swal.js') ?>"></script>

  <!-- Custom scripts depends on controller -->
  <?php if(isset($pageJS)) : ?>
    <script src="<?= base_url('assets/js/' . $pageJS) ?>"></script>
  <?php endif; ?>

  </body>

  </html>