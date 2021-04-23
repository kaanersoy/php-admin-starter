<?php
include('./utils/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo ($website_title) ?></title>
  <base href="<?php echo ($website_domain) ?>">
  <link rel="shortcut icon" href="<?php echo ($website_domain) ?>favicon.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo ($website_domain) ?>plugins/fontawesome-free/css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo ($website_domain) ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo ($website_domain) ?>dist/css/adminlte.min.css" />
  <!-- Additional style -->
  <link rel="stylesheet" href="<?php echo ($website_domain) ?>dist/css/additional.css">
</head>