<?php
    $blockName = "hero-block";
    $heading = get_field('heading');
    $subheading = get_field('sub-heading');
    $description = get_field('description');
    $bgimg = get_field('background_image');
    $ctabtn = get_field('cta_button');
    $type = get_field('hero_design')
?>
<?php if($type == 'default'): ?>
    <div class=<?php echo $blockName . $type; ?>>
    <div>
    <?php if($subheading): ?>
        <h2><?php echo $subheading; ?></h2>
    <?php endif; ?>

    <h1><?php echo $heading; ?><h1>

    <?php if($description): ?>
        <p><?php echo $description; ?></p>
    <?php endif; ?>

    <?php if($ctabtn['label']): ?>
        <button href="<?php echo $ctabtn['link']; ?>">
            <?php echo $ctabtn['label']; ?>
        </button>
    <?php endif; ?>
    </div>
    <?php if($bgimg): ?>
        <div style='background-image: url(<?php echo $bgimg; ?>); width:300px; height: 300px'>
        </div>
    <?php endif; ?>
</div>
<?php else: ?>
<div class=<?php echo $blockName . $type; ?> style='background-image: url(<?php echo $bgimg; ?>);'>
    <?php if($subheading): ?>
        <h2><?php echo $subheading; ?></h2>
    <?php endif; ?>

    <h1><?php echo $heading; ?><h1>

    <?php if($description): ?>
        <p><?php echo $description; ?></p>
    <?php endif; ?>

    <?php if($ctabtn['label']): ?>
        <button href="<?php echo $ctabtn['link']; ?>">
            <?php echo $ctabtn['label']; ?>
        </button>
    <?php endif; ?>
</div>
<?php endif; ?>

<style>
    .hero-blockdefault{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: flex-start;
        padding: 100px 150px;
        gap: 60px;
        isolation: isolate;
        width: 100%;
        background-repeat:no-repeat;
        background-size:cover;
    }
    .hero-blocklanding, .hero-blockhome{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: flex-start;
        padding: 100px 150px;
        gap: 60px;
        isolation: isolate;
        width: 100%;
        background-repeat:no-repeat;
        background-size:cover;
    }

    .<?php echo $blockName . $type;?> h1{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 72px;
        line-height: 110%;
        letter-spacing: -0.02em;
        color: black;
        margin:0;
        font-family: "proxima-nova", sans-serif;
    }

    .<?php echo $blockName . $type;?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        color: black;
        margin:0;
    }

    .<?php echo $blockName . $type;?> p{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        color: black;
        margin:0;
    }

    .<?php echo $blockName . $type;?> button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 18px 24px;
        gap: 12px;
        width: 259px;
        height: 51px;
        background: black;
        border-radius: 3px;
        border:none;
        font-style: normal;
        font-weight: 800;
        font-size: 15px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #000000;
        margin-top:40px;
    }

</style>
