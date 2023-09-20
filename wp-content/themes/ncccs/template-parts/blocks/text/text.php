<?php
$blockName = "text-block";
$heading = get_field('heading');
$description = get_field('body_copy');
$ctabtn = get_field('button');
$aboveHeader = get_field('above_header_content');
$bg_color = get_field('background_color');
$spacing = get_field('component_spacing');
?>

<div class=<?php echo $blockName . $bg_color; ?> data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <?php if ($aboveHeader): ?>
        <div class="tag-wrapper">
            <?php if ($aboveHeader['tags']):
                foreach ($aboveHeader['tags'] as $tag) {
                ?>
                    <small><?php echo $tag['tag']; ?></small>
            <?php }endif; ?>
            <?php if ($aboveHeader['headline']): ?>
            <small><?php echo $aboveHeader['headline']; ?></small>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($heading): ?>
        <h2><?php echo $heading; ?></h2>
    <?php endif; ?>

    <?php if ($description): ?>
        <p><?php echo $description; ?></p>
    <?php endif; ?>

    <?php if ($ctabtn['button_text']): ?>
        <button href="<?php echo $ctabtn['button_link']; ?>">
            <?php echo $ctabtn['button_text']; ?>
        </button>
    <?php endif; ?>
</div>

<style>
    .tag-wrapper{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        text-align: center;
        color: #000000;
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .<?php echo $blockName . $bg_color; ?>{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 100px 205px;
        }

    .text-blocklight{
        background-color: #F8F8F8;
    }

    .text-blockdark{
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

    .<?php echo $blockName . $bg_color; ?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 46px;
        line-height: 115%;
        text-align: center;
        letter-spacing: -0.02em;
        color: #000000;
        margin: 0;
    }

    .<?php echo $blockName . $bg_color; ?> p{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #888888;
    }

    .<?php echo $blockName . $bg_color; ?> button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 18px 24px;
        gap: 12px;
        background: #000;
        border-radius: 3px;
        border:none;
        font-style: normal;
        font-weight: 800;
        font-size: 15px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #FFF;
    }
    .mce-container.mce-menubar.mce-toolbar.mce-first{
        display:none;
    }
</style>
