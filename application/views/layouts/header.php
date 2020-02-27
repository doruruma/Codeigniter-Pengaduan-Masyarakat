<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $title ?></title>

  <!-- Custom fonts for this web -->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <!-- My Css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

  <!-- Plugin CSS -->
  <?php foreach ($pluginCSS as $css) : ?>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/' . $css) ?>">
  <?php endforeach; ?>

  <!-- Custom styles for this web -->
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body class="bg-light">