<?php
    $blockName = "hero-block-event";
    $heading = get_field('heading');
    $subheading = get_field('sub-heading');
    $description = get_field('description');
    $bgimg = get_field('background_image');
    $bgcolor = get_field('background_color');
    $ctabtn = get_field('cta_button');
    $date = get_field('date');
    $location = get_field('location');
    $booth = get_field('booth_no');
    $type = get_field('event_type');
?>

<div class=<?php echo $blockName . $bgcolor; ?>>
    <div class="content">
    <?php if($subheading): ?>
        <h2><?php echo $subheading; ?></h2>
    <?php endif; ?>

    <h1><?php echo $heading; ?><h1>

    <?php if($description): ?>
        <p><?php echo $description; ?></p>
    <?php endif; ?>

    <?php if($ctabtn['link']): ?>
        <button href="<?php echo $ctabtn['link']; ?>">
            <?php echo $ctabtn['label']; ?>
        </button>
    <?php endif; ?>

    <?php if($type): ?>
        <p><?php echo $type; ?></p>
    <?php endif; ?>

    <div style="display:flex; gap:20px">
        <?php if($date): ?>
            <p><?php echo $date; ?></p>
        <?php endif; ?>

        <?php if($location): ?>
            <p><?php echo $location; ?></p>
        <?php endif; ?>
    </div>

    <?php if($booth): ?>
        <h2><?php echo $booth; ?></h2>
    <?php endif; ?>
    </div>
    <?php if($bgimg): ?>
        <div style='background-image: url(<?php echo $bgimg; ?>); width:350px; height: 400px; backgroundSize:cover'>
        </div>
    <?php endif; ?>
</div>


<style>
    .<?php echo $blockName . $bgcolor; ?>{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: flex-start;
        padding: 40px;
        background-repeat:no-repeat;
        background-size:cover;
    }

    .hero-block-eventwhite{
        background-color: #FFF;
        color: #000;
    }

    .hero-block-eventlight{
        background-color: #F8F8F8;
        color: #000;
    }

    .hero-block-eventdark{
        background-color: #CCCCCC;
        color: #FFFFFF;
    }

    .hero-block-event .content{
        padding:60px;
    }
    .<?php echo $blockName . $bgcolor; ?> h1{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 72px;
        line-height: 110%;
        letter-spacing: -0.02em;
        margin:0;
        font-family: "proxima-nova", sans-serif;
    }

    .<?php echo $blockName . $bgcolor; ?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        margin:0;
    }

    .<?php echo $blockName . $bgcolor; ?> p{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        margin:0;
    }

    .<?php echo $blockName . $bgcolor; ?> button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 18px 24px;
        gap: 12px;
        width: 259px;
        height: 51px;
        background: #FFFFFF;
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
