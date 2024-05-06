<?php
    $blockName = "testimonial-block";
    $quote = get_field('quote');
    $person = get_field('persons_name');
    $business = get_field('business_name');
    $background = get_field('background_color');
?>

<div class=<?php echo $blockName; ?>>
<div style="backgroundColor:white; width:500px; padding: 20px 40px; textAlign:center;border-radius:12px">
    <h2>Testimonial</h2>
    <h3><?php echo $quote; ?></h3>
    <div class="author">
        <?php echo $person; ?> •
        <?php echo $business; ?>
    </div>
</div>
</div>

<style>

    .<?php echo $blockName; ?>{
        width: 600px;
        height: 210px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 80px 205px 100px;
        gap: 30px;
        background: var(--<?php echo $background; ?>);
    }

    .<?php echo $blockName; ?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 150%;
        color: var(--darkGrey);
    }

    .<?php echo $blockName; ?> h3{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 160%;
        text-align: center;
        color: var(--darkGrey);
    }

    .<?php echo $blockName; ?> .author{
        display:flex;
        justify-content:center;
        align-items:center;
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 140%;
        text-align: center;
        color: var(--navy);
        gap:15px;
    }

</style>
