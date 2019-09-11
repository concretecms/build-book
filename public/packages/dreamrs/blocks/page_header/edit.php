<?php
defined('C5_EXECUTE') or die('Access Denied.');
if (!isset($fID)) {
    $fID = 0;
}
if (!isset($overridePageName)) {
    $overridePageName = false;
}
if (!isset($customPageHeaderTitle)) {
    $customPageHeaderTitle = '';
}
?>

<div class="form-group">
    <label class="control-label"><?=t('Background Picture')?></label>
    <?php
    $fileManager = Core::make('helper/concrete/file_manager');
    print $fileManager->image('fID', 'fID', t('Choose Image'), $fID);
    ?>
</div>

<div class="form-group">
    <label class="control-label"><?=t('Override Page Title')?></label>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="overridePageName" value="1" <?php if ($overridePageName) { ?>checked<?php } ?>>
            <?=t('Yes, override the page title with a custom title.')?>
        </label>
    </div>
</div>

<div class="form-group" data-group="custom-page-header-title">
    <label class="control-label" for="customPageHeaderTitle"><?=t('Custom Page Header Title')?></label>
    <input type="text" id="customPageHeaderTitle" name="customPageHeaderTitle" value="<?=$customPageHeaderTitle?>" class="form-control">
</div>

<script type="text/javascript">
    $('input[name=overridePageName]').on('change', function() {
        if ($(this).is(':checked')) {
            $('div[data-group=custom-page-header-title]').show();
        } else {
            $('div[data-group=custom-page-header-title]').hide();
        }
    }).trigger('change');
</script>


