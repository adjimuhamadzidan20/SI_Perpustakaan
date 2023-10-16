<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Perpustakaan | <?= $title; ?></title>
  
  <base href="<?= base_url('assets'); ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <style>
    .sidebar-light-primary {
      background-color: #6F1E51;
    }

    .brand-link, .linkmenu {
      color: white !important;
    }

    .nav-item a.active {
      background-color: #56173F !important;
    }

    .nav-item a.active:hover, .nav-item a.active:active {
      background-color: #56173F !important;
    }

    .link-bread {
      color: #6F1E51 !important;
    }

    .custom-input:focus {
      border-color: #6F1E51;
    }

    .bg-info {
      background-color: #6F1E51 !important;
    }

    .btn-info {
      background-color: #6F1E51;
      border-color: #6F1E51;
      color: white;
    }

    .btn-info:hover {
      background-color: #56173F;
      border-color: #56173F;
      color: white;
    }

    /*.btn-info:active {
      background-color: #56173F !important;
      border-color: #56173F !important;
      color: white;
    }*/
    
    .nama-halaman {
      color: #222f3e;
    }

    .dataTables_paginate .paginate_button.page-item.active a {
      background-color: #6F1E51;
      border-color: #6F1E51;
    }

    .dataTables_paginate .paginate_button.page-item:not(.active) a {
      color: #6F1E51;
    }  

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">