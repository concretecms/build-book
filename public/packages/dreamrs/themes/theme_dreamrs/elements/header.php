<?php 
use Concrete\Core\Page\PageList;
defined('C5_EXECUTE') or die('Access Denied.'); ?>
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
                    <a class="navbar-brand" href="<?=URL::to('/')?>"> <img src="<?=$view->getThemePath()?>/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                        <ul class="navbar-nav">
                            <?php
                            $c = Page::getCurrentPage();
                            $currentPagePath = $c->getCollectionPath();

                            $cache = Core::make('cache/expensive');
                            $cacheItem = $cache->getItem('header_navigation_pages');
                            if ($cacheItem->isMiss()) {
                                $cacheItem->lock();
                                $home = Page::getByID($c->getHomePageID());
                                $list = new PageList();
                                $list->filterByParentID($home->getCollectionID());
                                $list->ignorePermissions();
                                $list->sortByDisplayOrder();
                                $results = $list->getResults();

                                $cacheItem->set($results);
                                $cacheItem->expiresAfter(7200);
                                $cache->save($cacheItem);
                                
                            } else {

                                $results = $cacheItem->get();
                            }
                            
                            foreach($results as $page) { 
                                $active = false;
                                if (strpos($page->getCollectionPath(), $currentPagePath) === 0) {
                                    $active = true;
                                }
                                ?>

                                <li class="nav-item <?php if ($active) { ?>active<?php } ?>">
                                    <a class="nav-link" href="<?=$page->getCollectionLink()?>"><?=$page->getCollectionName()?></a>
                                </li>
                                
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--::menu part end::-->
