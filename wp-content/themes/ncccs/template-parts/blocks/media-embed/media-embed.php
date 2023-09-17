<?php
    $blockName = "media-embed";
    $content = get_field('content');
?>

<div class=<?php echo $blockName; ?>>
    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>
</div>

<style>
  .<?php echo $blockName; ?>{
      width: 100%;
      height: fit-content;
  }
</style>
