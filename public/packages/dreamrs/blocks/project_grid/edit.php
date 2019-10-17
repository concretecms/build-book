<?php
defined('C5_EXECUTE') or die('Access Denied.');

if (!isset($projectGridHeadline)) {
    $projectGridHeadline = '';
}
?>

<div class="form-group">
    <label class="control-label" for="projectGridHeadline"><?=t('Project Grid Headline')?></label>
    <input type="text" id="projectGridHeadline" name="projectGridHeadline" value="<?=$projectGridHeadline?>" class="form-control">
</div>
