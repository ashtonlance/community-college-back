<?php
    $blockName = "media-embed";
    $image = get_field('image');
    $video = get_field('video');
?>

<div class=<?php echo $blockName; ?>>
    <?php if($image): ?>
        <img src="<?php echo $image['url']; ?>"/>
    <?php endif; ?>
    <?php if($video): ?>
        <?php echo $video; ?>
    <?php endif; ?>
</div>

<style>
  .<?php echo $blockName; ?>{
      width: 100%;
      height: fit-content;
  }
</style>
