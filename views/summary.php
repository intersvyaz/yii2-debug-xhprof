<?php
/**
 * @var intersvyaz\xhprof\panels\XhprofPanel $panel
 * @var boolean $active
 * @var integer $callCount
 */
?>
<div class="yii-debug-toolbar__block">
    <a href="<?= $panel->getUrl() ?>" title="<?= $active ? "$callCount function calls." : "xhprof wasn't active for this request" ?>.">
        Xhprof
        <?php if ($active): ?>
            <span class="yii-debug-toolbar__label yii-debug-toolbar__label_info"><?= $callCount ?></span>
        <?php endif; ?>
    </a>
    <a href="#" title="Disable xhprof" onclick="enableXhprof(event, false)" class="<?= $active ? '' : 'hide'; ?>">
        <span class="yii-debug-toolbar__label yii-debug-toolbar__label_warning">Disable</span>
    </a>
    <a href="#" title="Enable xhprof" onclick="enableXhprof(event, true)" class="<?= $active ? 'hide' : ''; ?>">
        <span class="yii-debug-toolbar__label yii-debug-toolbar__label_success">Enable</span>
    </a>
</div>
