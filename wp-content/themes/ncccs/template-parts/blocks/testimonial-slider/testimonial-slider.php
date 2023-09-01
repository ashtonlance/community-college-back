<?php
$blockName = "testimonial-slider";
$slides = get_field('slide');
$bg_color = get_field('background_color');
$spacing = get_field('component_spacing');
?>

<div class=<?php echo $blockName . $bg_color; ?> data-spacing-bottom=<?php if ($spacing)
          echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
          echo $spacing['top_spacing'] ?> >
    <?php if (is_array($slides)): ?>
            <?php foreach ($slides as $slide) { ?>
                    <h3><?php echo $slide['quote']; ?></h3>
                    <div class="author">
                        <?php echo $slide['persons_name']; ?> •
                        <?php echo $slide['job_title']; ?>
                    </div>
                    <p> <?php echo $slide['business_name']; ?></p>
                    <hr/>
            <?php } ?>
    <?php endif; ?>
</div>

<style>

.<?php echo $blockName . $bg_color; ?>{
        padding: 60px 105px;
        gap: 40px;
        width: fit-content;
        height: fit-content;
        text-align:center;
    }

    .<?php echo $blockName . $bg_color; ?> h3{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #000000;
    }


    .<?php echo $blockName . $bg_color; ?> .author{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        text-align: center;
        color: #888888;
    }

    .<?php echo $blockName . $bg_color; ?> p{
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

    .testimonial-sliderlight{
        background-color: #F8F8F8;
    }

    .testimonial-sliderdark{
        background-color: #CCCCCC;
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
