<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon-32x32.png" type="image/x-icon">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="<?= base_url() ?>assets/src/css/app.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/src/vendor/fontawesome-free-6.6.0-web/css/all.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <?php $this->load->view('layout/header'); ?>

    <!-- Hero Section -->
    <?php $this->load->view('layout/hero'); ?>

    <!-- Event Slider Section -->
    <?php $this->load->view('page/landing/event_slider'); ?>

    <!-- Daftar Event -->
    <?php $this->load->view('page/landing/event_list'); ?>

    <!-- Contact Section -->
    <?php // $this->load->view('layout/footer'); ?>

    <!-- Footer -->
    <?php $this->load->view('layout/footer'); ?>
</body>

</html>