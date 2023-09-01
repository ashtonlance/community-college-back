<?php
$blockName = "page-heading";
$heading = get_field('heading');
$alignment = get_field('alignment');
$bg_color = get_field('background_color');
$spacing = get_field('margins');
?>

<div class=<?php echo $blockName . $bg_color; ?>  data-spacing-bottom=<?php if ($spacing)
         echo $spacing['bottom'] ?> data-spacing-top=<?php if ($spacing)
         echo $spacing['top'] ?> data-alignment=<?php if($alignment) echo $alignment ?>>

    <?php if ($heading): ?>
            <<?php echo $heading['heading_size']; ?>>
                <?php echo $heading['content']; ?>
            </<?php echo $heading['heading_size']; ?>>
    <?php endif; ?>
</div>

<style>
   .<?php echo $blockName . $bg_color; ?> h1,
   .<?php echo $blockName . $bg_color; ?> h2,
   .<?php echo $blockName . $bg_color; ?> h3,
   .<?php echo $blockName . $bg_color; ?> h4,
   .<?php echo $blockName . $bg_color; ?> h5,
   .<?php echo $blockName . $bg_color; ?> h6 {
        margin:0;
    }
    .<?php echo $blockName . $bg_color; ?> {
        display:flex;
        gap: 20px;
    }
    .page-headingwhite{
        background-color: #FFF;
    }

    .page-headinglight{
        background-color: #F8F8F8;
    }

    .page-headingdark{
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

    [data-alignment='left']{
        justify-content: left;
    }

    [data-alignment='center']{
        justify-content: center;
    }

    [data-alignment='right']{
        justify-content: right;
    }
</style>
