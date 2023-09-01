<?php
    $blockName = "external-event";
    $heading = get_field('heading');
    $description = get_field('description');
    $bgimg = get_field('background_image');
    $bgcolor = get_field('background_color');
    $ctabtn = get_field('cta_button');
    $date = get_field('date');
    $location = get_field('location');
    $booth = get_field('booth_no');
    $booth_time = get_field('booth_time');
    $type = get_field('event_type');
?>

<div class='<?php echo $blockName . $bgcolor; ?>'>
    <div class="card">
    <?php if ($type): ?>
        <p class="tag"><?php echo $type; ?></p>
    <?php endif; ?>

    <?php if ($bgimg): ?>
        <img src="<?php echo $bgimg; ?>"/>
    <?php endif; ?>
    <div class="content" >
        <div class="row">
            <?php if ($date): ?>
                        <p><?php echo $date; ?></p>
                    <?php endif; ?> -
                    <?php if ($location): ?>
                        <p><?php echo $location; ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($heading): ?>
                            <h3><?php echo $heading; ?></h3>
                <?php endif; ?>

                <?php if ($description): ?>
                            <p><?php echo $description; ?></p>
                <?php endif; ?>

                <?php if ($booth): ?>
                            <p><?php echo $booth; ?></p>
                <?php endif; ?>

                <?php if ($booth_time): ?>
                            <p><?php echo $booth_time; ?></p>
                <?php endif; ?>

                <?php if ($ctabtn): ?>
                            <a href='<?php echo $ctabtn['link']; ?>'>
                        <?php echo $ctabtn['label'] ?>
                            </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
   .<?php echo $blockName; ?> {
        display:flex;
        gap: 20px;
    }

    .external-eventwhite .card{
        background-color: #FFF;
    }

    .external-eventlight .card{
        background-color: #F8F8F8;
    }

    .external-eventdark .card{
        background-color: #CCCCCC;
    }

    .<?php echo $blockName . $bgcolor; ?> .content{
        padding:20px;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        gap: 10px;
    }

    .<?php echo $blockName . $bgcolor; ?> .row{
        display:flex;
        justify-content:center;
        align-items:center;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 160%;
        color: #555555;
    }

    .<?php echo $blockName . $bgcolor; ?> .tag{
        position: absolute;
        top:20px;
        right:20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 6px 12px;
        gap: 10px;
        width: 88px;
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

    .<?php echo $blockName . $bgcolor; ?> .card{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        max-width: unset;
        border:none;
        flex-grow:1;
        padding:0;
        position:relative;
    }

    .<?php echo $blockName . $bgcolor; ?> h3{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 120%;
        text-align: center;
        letter-spacing: -0.01em;
        color: #000000;
    }

    .<?php echo $blockName . $bgcolor; ?> p{
        margin:0;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: #555555;
    }

    .<?php echo $blockName . $bgcolor; ?> img{
        width:100%;
        height:200px;
        background-size:cover;
    }

    .<?php echo $blockName . $bgcolor; ?> a{
         display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 18px 24px;
        gap: 12px;
        width: 152px;
        height: 51px;
        background: #555555;
        border-radius: 3px;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 800;
        font-size: 15px;
        line-height: 100%;
        text-align: center;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #FFFFFF;
        text-decoration:none;
        margin-bottom:20px;
    }
</style>
