<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Page\Page;
use Concrete\Core\File\File;

$c = Page::getCurrentPage();
$pageTitle = $c->getCollectionName();
if ($overridePageName) {
    $pageTitle = $customPageHeaderTitle;
}
$backgroundImage = null;
if ($fID) {
    $background = File::getByID($fID);
    if ($background) {
        $backgroundImage = $background->getURL();
    }
}
?>
<section class="breadcrumb blog_bg" 
     <?php if ($backgroundImage) { ?>style="background-image: url('<?=$backgroundImage?>')"<?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2><?=$pageTitle?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
