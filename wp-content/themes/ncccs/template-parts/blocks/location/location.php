<?php
    $blockName = "location";
    $title = get_field('title');
    $address = get_field('address');
    $mailing_address = get_field('mailing_address');
    $directions = get_field('directions_link');
    $map = get_field('map');
?>
<div class="<?php echo $blockName; ?> position-image-<?php echo $imgPosition; ?>">
    <div>
        <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if($address): ?>
            <h4><?php echo $address; ?></h4>
        <?php endif; ?>

        <?php if($mailing_address): ?>
            <p>Mailing Address</p>
            <h5><?php echo $mailing_address; ?></h5>
        <?php endif; ?>

        <?php if($directions): ?>
            <a href=<?php echo $directions; ?>> Get Directions </a>
        <?php endif; ?>
    </div>
    <div>
        <?php if($map): ?>
            <?php echo $map; ?>
        <?php endif; ?>
    </div>
</div>

<style>

.<?php echo $blockName; ?>{
    display:flex;
}

.<?php echo $blockName; ?> h2{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 34px;
    line-height: 120%;
    letter-spacing: -0.01em;
    color: #000000;
    margin: 0;
}

.<?php echo $blockName; ?> h4{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 26px;
    line-height: 120%;
    letter-spacing: -0.01em;
}

.<?php echo $blockName; ?> iframe{
    width: 600px;
    height: 250px;
}

.<?php echo $blockName; ?> a{
    padding: 14px 22px;
    gap: 8px;
    width: 138px;
    height: 42px;
    border: 1.5px solid #555555;
    border-radius: 3px;
    font-weight: 800;
    font-size: 14px;
    line-height: 100%;
    text-align: center;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #555555;
}
</style>
