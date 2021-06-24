<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $judul ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png'); ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>"> -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style-Home.css') ?>">
    <!-- leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    

    <style>
        .flex-container {
            background-image: url(<?php echo base_url("assets/img/indoke.png"); ?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>