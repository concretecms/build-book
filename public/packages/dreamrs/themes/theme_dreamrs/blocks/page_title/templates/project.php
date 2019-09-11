<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Page\Page;
$c = Page::getCurrentPage();
$type = $c->getAttribute('project_type');
?>
<div class="project_gallery_hover_text">
    <?php if ($type) { ?>
        <p><?=$type?></p>
    <?php } ?>
    <h3><?=$title?></h3>
</div>

