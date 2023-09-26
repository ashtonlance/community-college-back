<?php
    $blockName = "general-cards";
    $cards = get_field('card');
    $bg_color = get_field('background_color');
    $spacing = get_field('module_margin');
?>


<div class=<?php echo $blockName.$bg_color; ?>  data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <div class=<?php echo $blockName; ?>>
        <?php if(is_array($cards)): ?>
            <?php foreach ($cards as $card){ ?>
                <div class="card">
                    <img style="width:300px" src=<?php echo $card['image']['url']; ?>>
                    <h3><?php echo $card['heading']; ?></h3>
                    <p><?php echo $card['body_copy']; ?></p>
                    <a href='<?php echo $card['button']['url']; ?>'>
                        <?php echo $card['button']['label']; ?>
                    </a>
                </div>
            <?php } ?>
        <?php endif; ?>
    </div>
</div>

<style>
    .<?php echo $blockName; ?> {
        display:flex;
        gap: 20px;
    }

    .general-cardsgrey, .general-cardswhite {
        width: 800px;
        padding: 40px;
    }

    .general-cardsgrey, .general-cardswhite .card {
        background: #F8F8F8;
    }

    .general-cardswhite,  .general-cardsgrey .card {
        background: white;
    }

    .card{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 60px 40px;
        gap: 20px;
        max-width: unset;
        border:none;
        flex-grow:1;
    }

    .<?php echo $blockName; ?> .card.white{
        background: #fff;
    }
    .<?php echo $blockName; ?> .card.light{
        background: #F8F8F8;
    }
    .<?php echo $blockName; ?> .card.dark{
        background: #ccc;
    }
    .<?php echo $blockName; ?> .card.dark a{
       background: #555555;
       color: white;
    }
    .<?php echo $blockName; ?> h3{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 120%;
    }

    .<?php echo $blockName; ?> p{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #555555;
    }

    .<?php echo $blockName; ?> a{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 14px 22px;
        gap: 8px;
        width: 119px;
        height: 42px;
        background: #CCCCCC;
        border-radius: 3px;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 14px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.01em;
        text-transform: capitalize;
        color: #000000;
        text-decoration:none;
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
