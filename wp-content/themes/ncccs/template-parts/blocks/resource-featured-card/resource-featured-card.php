<?php
    $blockName = "featured-resources";
    $post = get_field('link_to_resource');
    $resource_type = get_the_category($post->ID)[0]->name;
    $image = get_the_post_thumbnail_url($post->ID);
    $date = get_the_date( "d/m/Y", $post );
?>

<div class='<?php echo $blockName; ?>'>
    <?php if($post): ?>
        <p class='tag'>Featured</p>
        <div class="row">
            <h2 class='type'><?php echo $resource_type; ?></h2>
            <h2 class='date'><?php echo $date; ?></h2>
        </div>
        <h2 class='title'><?php echo $post->post_title; ?></h2>
        <h2 class='excerpt'><?php echo $post->post_excerpt; ?></h2>
        <button class='readmore' href="<?php get_permalink($post->ID) ; ?>">
            Read <?php echo $resource_type; ?>
        </button>
    <?php endif; ?>
</div>

<style>
.<?php echo $blockName; ?> {
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 22.92%, rgba(0, 0, 0, 0.7) 75.52%), linear-gradient(0deg, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05)), url(<?php echo $image; ?>);
    padding: 110px 80px;
    position:relative;
}

.<?php echo $blockName; ?> .row{
    display:flex;
    gap: 15px;
}

.<?php echo $blockName; ?> .tag{
    position: absolute;
    top: 40px;
    right: 40px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 6px 12px;
    gap: 10px;
    width: 73px;
    height: 29px;
    background: #FFFFFF;
    border-radius: 3px;
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 12px;
    line-height: 140%;
    text-align: center;
    color: #000000;
}

.<?php echo $blockName; ?> .type,
.<?php echo $blockName; ?> .date{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 160%;
    color: #FFFFFF;
}

.<?php echo $blockName; ?> .date{
}


.<?php echo $blockName; ?> .title{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 34px;
    line-height: 120%;
    letter-spacing: -0.01em;
    color: #FFFFFF;
}

.<?php echo $blockName; ?> .excerpt{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 160%;
    color: #FFFFFF;
}

.<?php echo $blockName; ?> .readmore{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 14px 22px;
    gap: 8px;
    height: 42px;
    border: 1.5px solid #FFFFFF;
    border-radius: 3px;
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 14px;
    line-height: 100%;
    text-align: center;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #FFFFFF;
    background: transparent;
    color:white;
}

</style>
