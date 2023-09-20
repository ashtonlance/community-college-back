<?php
$blockName = "wysiwyg";
$content = get_field('content');
?>

<div class=<?php echo $blockName; ?>>
    <?php if ($content): ?>
            <?php echo $content; ?>
    <?php endif; ?>
</div>

<style>
  .<?php echo $blockName; ?>{
      width: 100%;
      height: fit-content;
  }
  [data-key="field_6503720cb3984"] .mce-container.mce-menubar.mce-toolbar.mce-first{
    display:block;
  }
  [data-key="field_6503720cb3984"] .mce-menubar .mce-menubtn:first-child,
  [data-key="field_6503720cb3984"] .mce-menubar .mce-menubtn:nth-child(3),
  [data-key="field_6503720cb3984"] .mce-menubar .mce-menubtn:nth-child(4)
  {
    display:none;
  }

</style>
