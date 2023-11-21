<?php
$blockName = "text-and-media-slider";
$slides = get_field('slide');
$bg_color = get_field('background_color');
$spacing = get_field('component_spacing');
?>

<div class="" data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?>>
    <div class="<?php echo $blockName . $bg_color; ?>">
        <div class="slider" data-spacing-bottom=<?php if ($spacing)
            echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
            echo $spacing['top_spacing'] ?>>
            <?php if (is_array($slides)) : ?>
                <?php foreach ($slides as $slide) {
                    $title = $slide['title'];
                    $heading = $slide['heading'];
                    $video = $slide['video'];
                    $image = $slide['image'];
                    $description = $slide['body_copy'];
                    $imgPosition = $slide['image_position'];
                ?>
                    <div class="<?php echo $blockName; ?> position-image-left" data-spacing-bottom=<?php if ($spacing)
                            echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
                            echo $spacing['top_spacing'] ?>>
                        <?php if ($image or $video) :?>
                            <?php if ($video AND $video['mime_type'] === 'video/mp4') : ?>
                                <iframe src=<?php echo $video['link']; ?>> </iframe>
                            <?php endif; ?>
                            <?php if ($image AND $image['mime_type'] === 'image/jpeg' or $image['mime_type'] === 'image/png') : ?>
                                <img class="image" src=<?php echo $image['link']; ?> />
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="content">
                            <?php if ($title) : ?>
                                <small><?php echo $title; ?></small>
                            <?php endif; ?>
                            <?php if ($heading) : ?>
                                <h2><?php echo $slide['heading']; ?></h2>
                            <?php endif; ?>
                            <?php if ($description) : ?>
                                <p><?php echo $description; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    .<?php echo $blockName . $bg_color; ?> {
        padding: 60px 105px;
    }

    .text-and-media-slider {
        display: flex;
        gap: 40px;
        overflow: hidden;
    }

    .<?php echo $blockName . $bg_color; ?>h3 {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #000000;
    }


    .<?php echo $blockName . $bg_color; ?>.author {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        text-align: center;
        color: #888888;
    }

    .<?php echo $blockName . $bg_color; ?>p {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 900;
        font-size: 15px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #555555;
    }



    .<?php echo $blockName; ?>.position-image-left {
        flex-direction: row;
    }

    .<?php echo $blockName; ?>.position-image-right {
        flex-direction: row-reverse;
    }

    .<?php echo $blockName; ?>.image {
        width: 300px;
        object-fit: cover;
    }

    .<?php echo $blockName; ?>.content {
        width: 500px;
    }

    .<?php echo $blockName; ?>h2 {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 46px;
        line-height: 115%;
        letter-spacing: -0.02em;
        color: #000000;
    }

    .<?php echo $blockName; ?>p {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 150%;
        color: #888888;
    }

    .<?php echo $blockName; ?>small {
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 160%;
    }

    [data-spacing-bottom='none'] {
        margin-bottom: 0;
    }

    [data-spacing-top='none'] {
        margin-top: 0;
    }

    [data-spacing-bottom='medium'] {
        margin-bottom: 40px;
    }

    [data-spacing-top='medium'] {
        margin-top: 40px;
    }

    [data-spacing-bottom='large'] {
        margin-bottom: 80px;
    }

    [data-spacing-top='large'] {
        margin-top: 80px;
    }
</style>