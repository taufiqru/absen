<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absen Harian Pushansiber</title>
    <meta name="description" content ="Dengan hormat, kepada seluruh personel agar mengisi formulir setiap hari pada pukul 04.00 - 07.00 WIB."/>
    <meta property="og:image" content="<?=base_url();?>dist/images/snapshot.jpg"/>
    <meta property="og:title" content="Absen Harian Personel Pushansiber"/>
    <meta property="og:description" content="Dengan hormat, kepada seluruh personel agar mengisi formulir setiap hari pada pukul 04.00 - 07.00 WIB."/>
    <meta property="og:url" content="https://absen-coc.kemhan.go.id/"/>
    <meta property="og:site_name" content="Absen Pushansiber"/>


    <meta name="Description" content="Absensi Personel Pushansiber" />
    <!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
    <meta name="theme-color" content="#414f57" />
    <!-- Mendeklarasikan ikon untuk iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="Absen Pushansiber " />
    <link rel="apple-touch-icon" href="<?=base_url()?>dist/icon/128.png" />
    <!-- Mendeklarasikan ikon untuk Windows -->
    <meta name="msapplication-TileImage" content="<?=base_url()?>dist/icon/128.png" />
    <meta name="msapplication-TileColor" content="#000000" />

    <link rel="manifest" href="<?=base_url()?>manifest.json">
    <script>
        //if browser support service worker
        if ('serviceWorker' in navigator) {
      caches.keys().then(function(cacheNames) {
        cacheNames.forEach(function(cacheName) {
          caches.delete(cacheName);
        });
      });
    }
        // if('serviceWorker' in navigator) {
        //   navigator.serviceWorker.register('sw.js');
        // };
        self.caches.keys().then(keys => { keys.forEach(key => console.log(key)) })
      </script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url()?>dist/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
    <link rel="icon" href="<?=base_url()?>dist/images/favicon.ico">
    <link rel="stylesheet" href="<?=base_url()?>dist/css/skins/_all-skins.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>dist/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>plugins/jquery-ui/jquery-ui.min.css"></script>

     <!-- JS -->
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
    <script src="<?=base_url()?>/dist/js/main.js"></script>
</head>

<body>