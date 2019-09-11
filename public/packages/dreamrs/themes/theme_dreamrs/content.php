<?php

defined('C5_EXECUTE') or die('Access Denied.');

$view->inc('elements/header.php');

$a = new Area('Page Header');
$a->display($c);

?>

<div class="section-padding">
    <section class="gallery_details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="project_img">
                        <?php
                            $a = new Area('Main');
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
$view->inc('elements/footer.php');

