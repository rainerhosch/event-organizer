<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        .swiper-container {
            max-width: 100%;
            width: 100%;
        }

        .swiper-slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
	 <?php $this->load->view('layout/header');?>

    <!-- Hero Section -->
	<?php $this->load->view('layout/hero');?>

    <!-- Event Slider Section -->
	<?php $this->load->view('page/landing/event_slider');?>

    <!-- Daftar Event -->
	<?php $this->load->view('page/landing/event_list');?>

    <!-- Contact Section -->
	<?php // $this->load->view('layout/footer');?>

    <!-- Footer -->
	<?php $this->load->view('layout/footer');?>

    <!-- Swiper JS Initialization -->
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>