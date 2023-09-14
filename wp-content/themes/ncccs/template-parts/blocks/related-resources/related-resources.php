<?php
    $blockName = "related-resources-block";
    $cards = get_field('related_resources');
    $spacing = get_field('component_spacing');
    $heading = get_field('heading');
?>

<div class='<?php echo $blockName; ?>' data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <?php if(is_array($cards)): ?>
        <h4><?php echo $heading; ?></h4>
        <div class="row">
        <?php foreach ($cards as $card){ ?>
            <div class="card"><?php echo $card['resource_item']->post_title; ?></div>
        <?php } ?>
        </div>
    <?php endif; ?>
</div>


<style>
    .<?php echo $blockName; ?> .row{
        display:flex;
        gap: 20px;
    }

    .<?php echo $blockName; ?> .card{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        padding: 40px;
        gap: 24px;
        width: 610px;
        height: 273px;
        background: #F8F8F8;
    }

    .<?php echo $blockName; ?> h4{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 900;
        font-size: 15px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #000000;
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
