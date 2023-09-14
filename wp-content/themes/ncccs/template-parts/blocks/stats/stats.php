<?php
    $blockName = "stats-block";
    $title = get_field('stats_title');
    $copy = get_field('stats_copy');
    $items = get_field('stats');
?>

<div class=<?php echo $blockName; ?>>
    <?php if($title): ?>
        <h2><?php echo $title; ?></h2>
    <?php endif; ?>

    <?php if($copy): ?>
        <div class="copy"><?php echo $copy; ?></h2>
    <?php endif; ?>

    <?php if($items):?>
        <div class="row">
        <?php foreach ($items as $item) {?>
        <div class="column">
            <h3><?php echo $item['number']; ?></h3>
            <p><?php echo $item['explainer_text']; ?></p>
        </div>
        <?php } ?>
    </div>
    <?php endif; ?>
</div>

<style>

    .<?php echo $blockName; ?>{
        width: 800px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 80px 205px 100px;
        gap: 60px;
        background: #555555;
    }
    .<?php echo $blockName; ?> .column{
        display:flex;
        flex-direction:column;
    }
    .<?php echo $blockName; ?> .row{
        display:flex;
        justify-content:space-between;
        gap:80px;
    }
    .<?php echo $blockName; ?> h3{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 82px;
        line-height: 110%;
        text-align: center;
        letter-spacing: -0.02em;
        color: #FFFFFF;
    }
    .<?php echo $blockName; ?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        color: #FFFFFF;
    }

    .<?php echo $blockName; ?> p{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 26px;
        line-height: 120%;
        text-align: center;
        letter-spacing: -0.01em;
        color: #EBEBEB;
    }

    .<?php echo $blockName; ?> .copy{
        color: #fff;
        text-align: center;
    }

</style>
