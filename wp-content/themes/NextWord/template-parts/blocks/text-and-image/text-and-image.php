<?php
    $blockName = "text-and-image-block";
    $title = get_field('title');
    $heading = get_field('heading');
    $image = get_field('image');
    $description = get_field('body_copy');
    $imgPosition = get_field('image_position');
    $spacing = get_field('component_spacing');

?>

<div class="<?php echo $blockName; ?> position-image-<?php echo $imgPosition; ?>" data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <?php if($image): ?>
        <img class="image" src=<?php echo $image['url']; ?> />
    <?php endif; ?>
    <div class="content">
        <?php if($title): ?>
            <small><?php echo $title; ?></small>
        <?php endif; ?>

        <?php if($heading): ?>
            <h2><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php if($description): ?>
            <p><?php echo $description; ?></p>
        <?php endif; ?>
    </div>
</div>

<style>

.<?php echo $blockName; ?>{
    display:flex;
    gap:40px;
    overflow:hidden;
}
.<?php echo $blockName; ?>.position-image-left{
    flex-direction:row;
}

.<?php echo $blockName; ?>.position-image-right{
    flex-direction: row-reverse;
}

.<?php echo $blockName; ?> .image{
    width: 500px;
}

.<?php echo $blockName; ?> .content{
    width: 500px;
}
.<?php echo $blockName; ?> h2{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 46px;
    line-height: 115%;
    letter-spacing: -0.02em;
    color: #000000;
}

.<?php echo $blockName; ?> p{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 150%;
    color: #888888;
}

.<?php echo $blockName; ?> small{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 160%;
}

[data-spacing-bottom='none']{
        margin-bottom:0;
    }

    [data-spacing-top='none']{
        margin-top:0;
    }

    [data-spacing-bottom='medium']{
        margin-bottom:40px;
    }

    [data-spacing-top='medium']{
        margin-top:40px;
    }
    [data-spacing-bottom='large']{
        margin-bottom:80px;
    }

    [data-spacing-top='large']{
        margin-top:80px;
    }

</style>
