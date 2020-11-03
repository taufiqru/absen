<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Pushansiber</title>
  <link rel="icon" href="<?=base_url()?>/dist/images/favicon.ico">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>dist/css/mystyle.css">
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
  <script src="<?=base_url()?>dist/js/notify.js"></script>
  <script>
    $.notifyDefaults({
      newest_on_top:true,
      placement: {
        from: "top",
        align: "right"
      },
      offset : 20,
      spacing : 10,
      z_index : 9999,
      delay : 700,
      animate:{
        enter: "animated fadeInDown",
        exit: "animated fadeOutUp"
      }
    });
  </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
