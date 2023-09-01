<?php
$blockName = "button";
$bg_color = get_field('background');
$spacing = get_field('component_spacing');
$link = get_field('button_link');
$label = get_field('button_label');
$alignment = get_field('button_alignment');
$button_color = get_field('button_background');
?>

<div class="<?php echo $blockName . $bg_color; ?> <?php echo $alignment; ?>" data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <?php if($link): ?>
        <a href="<?php echo $link; ?>">
            <?php echo $label; ?>
        </a>
    <?php endif; ?>
</div>

<style>

    .<?php echo $blockName . $bg_color; ?> a {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 14px 22px;
        gap: 8px;
        width: 119px;
        height: 42px;
        background: var(--<?php echo $button_color; ?>);
        border-radius: 3px;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 16px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.01em;
        text-transform: capitalize;
        color: #fff;
        text-decoration:none;
    }
    .<?php echo $blockName . $bg_color; ?> {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
        justify-content: center;
    }

    .buttonwhite {
      background-color: #fff;
    }
    .buttonsky {
      background-color: var(--sky);
    }
    .buttonstone {
      background-color: var(--stone);
    }

    .start {
      justify-content: flex-start;
    }

    .center {
      justify-content: center;
    }

    .end {
      justify-content: flex-end;
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
