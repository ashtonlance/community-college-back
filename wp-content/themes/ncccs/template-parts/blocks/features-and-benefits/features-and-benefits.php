<?php
$blockName = "features-and-benefits-cards";
$cards = get_field('card');
$bg_color = get_field('background_color');
$spacing = get_field('component_spacing');
?>

<div class=<?php echo $blockName . $bg_color?> data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <?php if (is_array($cards)): ?>
        <?php foreach ($cards as $card) { ?>
            <div class="card-features">
                <h3><?php echo $card['heading']; ?></h3>
                <p><?php echo $card['body_copy']; ?></p>
                <?php if ($card['optional_link']) { ?>
                <p class="link"><?php echo $card['optional_link']['title']; ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    <?php endif; ?>
</div>

<style>
    .<?php echo $blockName . $bg_color; ?> {
        width:800px;
        display: flex;
        justify-content: space-around;
        gap: 20px;
        padding: 20px;
        width: 100%;
    }

    .features-and-benefits-cardswhite,
    .features-and-benefits-cardsgrey .card-features{
        background:white;
    }

    .features-and-benefits-cardsgrey,
    .features-and-benefits-cardswhite .card-features
     {
        background:#F8F8F8;
    }

    .<?php echo $blockName . $bg_color; ?> .card-features{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 60px 40px;
        border:none;
        flex-grow:1;
    }

    .<?php echo $blockName . $bg_color; ?> h3{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 120%;
    }

    .<?php echo $blockName . $bg_color; ?> p{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #555555;
    }

    .<?php echo $blockName . $bg_color; ?> p.link{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: var(--navy);
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

    .mce-container.mce-menubar.mce-toolbar.mce-first{
        display:none;
    }
</style>
