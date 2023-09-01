<?php
$blockName = "custom-links-block";
$blocks = get_field('links_lists');
$label = get_field('link_list_label');
$items = get_field('items');
?>


<div class=<?php echo $blockName; ?> >
    <?php if ($blocks): ?>
        <?php foreach ($blocks as $block) { ?>
            <?php if($block): ?>
                <div class="row">
                    <?php if($block['link_list_label']): ?>
                        <h5><?php echo $block['link_list_label']; ?></h5>
                        <?php foreach ($block['items'] as $item) {?>
                            <div class="column">
                                <a href="<?php echo $item['link_url']; ?>">
                                    <?php echo $item['link_label']; ?>
                                </a>
                            </div>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php } ?>
    <?php endif; ?>
</div>

<style>
    .<?php echo $blockName; ?>{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 40px;
        gap: 100px;
        background: #F8F8F8;
    }

    .<?php echo $blockName; ?> .row{
        display:flex;
        flex-direction:column;
    }

    .<?php echo $blockName; ?> h5{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 900;
        font-size: 15px;
        line-height: 100%;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #000000;
    }

    .<?php echo $blockName; ?> a{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 110%;
        text-decoration:none;
        letter-spacing: -0.01em;
    }
</style>
