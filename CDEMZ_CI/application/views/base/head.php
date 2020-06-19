<?php
defined('BASEPATH') or exit('No direct script access allowed');
$actual_link = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-pt">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $titulo ?> - CDE MZ</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/CDE-LOGO.png') ?>" />

    <meta property="og:title" content="Código de Estrada MZ" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $actual_link; ?>" />
    <meta property="og:image" content="<?php echo base_url('assets/img/CDE-LOGO.png') ?>" />
    <meta property="og:site_name" content="Código de Estrada MZ" />
    <meta property="fb:app_id" content="2450247105009106" />
    <meta property="og:description" content="Website do aplicativo código de estrada MZ. A melhor forma de estudar o código de estrada no celular." />

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mdb.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-all.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/termos.css') ?>" />
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url('assets/img/logo/logo.png') ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->