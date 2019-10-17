<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="portfolio_area section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter">
                    <h2><?=$projectGridHeadline?></h2>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php
                        /**
                         * @var $options \Concrete\Core\Entity\Attribute\Value\Value\SelectValueOption[]
                         */
                        $total = count($options);
                        for ($i = 0; $i < $total; $i++) { 
                            $option = $options[$i];
                            $label = $option->getSelectAttributeOptionValue();
                            $id = camelcase($label);
                            ?>

                            <li>
                                <a class="<?php if ($i == 0) { ?>active<?php } ?>" id="<?=$id?>-tab" data-toggle="tab" href="#<?=$id?>"
                                   role="tab" aria-controls="<?=$id?>" aria-selected="true">
                                    <?=$label?>
                                </a>
                            </li>

                        <?php }
                        ?>
                    </ul>
                </div>
                <div class="portfolio_item tab-content" id="myTabContent">
                    <?php 
                    for ($i = 0; $i < $total; $i++) {
                        $option = $options[$i];
                        $label = $option->getSelectAttributeOptionValue();
                        $id = camelcase($label);
                        
                        $projectList = new \Concrete\Core\Page\PageList();
                        $projectList->filterByAttribute('project_category', $option);
                        $projectList->sortByPublicDateDescending();
                        $projectList->filterByPageTypeHandle('project');
                        $projectList->setItemsPerPage(3);
                        $results = $projectList->getResults();
                        
                        ?>

                        <div class="row align-items-center justify-content-between tab-pane fade show <?php if ($i == 0) { ?>active<?php } ?>"
                             id="<?=$id?>" role="tabpanel" aria-labelledby="Architecture-tab">

                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <?php if (isset($results[0])) { 
                                    $page = $results[0];
                                    $file = $page->getAttribute('project_thumbnail');
                                    $url = '';
                                    if ($file) {
                                        $url = $file->getURL();
                                    }
                                    ?>
                                    <div class="portfolio_box">
                                        <a href="<?=$url?>" class="img-gal">
                                            <div class="single_portfolio">
                                                <img class="img-fluid w-100" src="<?=$url?>" alt="">
                                            </div>
                                        </a>
                                        <div class="short_info">
                                            <p><?=$page->getAttribute('project_type')?></p>
                                            <h4><a href="<?=$page->getCollectionLink()?>"><?=$page->getCollectionName()?></a></h4>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                
                                    <div class="empty-project"></div>
                                    
                                <?php } ?>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <?php if (isset($results[1])) {
                                            $page = $results[1];
                                            $file = $page->getAttribute('project_thumbnail');
                                            $url = '';
                                            if ($file) {
                                                $url = $file->getURL();
                                            }
                                            ?>
                                            <div class="portfolio_box">
                                                <a href="<?=$url?>" class="img-gal">
                                                    <div class="single_portfolio">
                                                        <img class="img-fluid w-100" src="<?=$url?>" alt="">
                                                    </div>
                                                </a>
                                                <div class="short_info">
                                                    <p><?=$page->getAttribute('project_type')?></p>
                                                    <h4><a href="<?=$page->getCollectionLink()?>"><?=$page->getCollectionName()?></a></h4>
                                                </div>
                                            </div>
                                        <?php } else { ?>

                                            <div class="empty-project"></div>

                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <?php if (isset($results[2])) {
                                            $page = $results[2];
                                            $file = $page->getAttribute('project_thumbnail');
                                            $url = '';
                                            if ($file) {
                                                $url = $file->getURL();
                                            }
                                            ?>
                                            <div class="portfolio_box">
                                                <a href="<?=$url?>" class="img-gal">
                                                    <div class="single_portfolio">
                                                        <img class="img-fluid w-100" src="<?=$url?>" alt="">
                                                    </div>
                                                </a>
                                                <div class="short_info">
                                                    <p><?=$page->getAttribute('project_type')?></p>
                                                    <h4><a href="<?=$page->getCollectionLink()?>"><?=$page->getCollectionName()?></a></h4>
                                                </div>
                                            </div>
                                        <?php } else { ?>

                                            <div class="empty-project"></div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
