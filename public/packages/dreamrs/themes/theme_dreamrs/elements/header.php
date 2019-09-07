<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php View::element('header_required'); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/flaticon.css">
    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/magnific-popup.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/style.css">
</head>

<body>

<!-- Open page wrapper class for concrete5 //-->
<div class="<?=$c->getPageWrapperClass()?>">
    
<!--::menu part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="<?=$view->getThemePath()?>/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="projects.html">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--::menu part end::-->
