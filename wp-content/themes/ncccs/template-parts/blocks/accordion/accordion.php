<?php
$blockName = "accordion";
$bg_color = get_field('background_color');
$spacing = get_field('margins');
$slides = get_field('accordion');
?>

<div class=<?php echo $blockName; ?>>
    <div class="slider" data-spacing-bottom=<?php if ($spacing)
          echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
          echo $spacing['top_spacing'] ?> >
          Accordion
        <?php if (is_array($slides)): ?>
            <?php foreach ($slides as $slide) { ?>
                    <h3><?php echo $slide['heading']; ?></h3>
                    <div>
                        <?php echo $slide['content']; ?>
                    </div>
                    <hr/>
            <?php } ?>
        <?php endif; ?>
    </div>
</div>

<style>

.<?php echo $blockName; ?>{
        padding: 60px 105px;
        width: 800px;
        text-align:center;
        background-color: var(--<?php echo $bg_color; ?>)
    }

    .testimonial-sliderwhite .slider,
    .testimonial-slidergrey{
        background-color: #F8F8F8;
    }

    .testimonial-slidergrey .slider,
    .testimonial-sliderwhite{
        background-color: white;
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