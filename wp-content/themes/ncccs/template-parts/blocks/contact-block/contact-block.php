<?php
    $blockName = "contact-block";
    $title = get_field('title');
    $jobTitle = get_field('job_title');
    $phoneNumber = get_field('phone_number');
    $link = get_field('link');
    $image = get_field('image');
?>
<div class="<?php echo $blockName; ?> position-image-<?php echo $imgPosition; ?>">
    <?php if($image): ?>
        <img style="height:250px;width:400px;object-fit:cover;" src="<?php echo $image["url"]; ?>" alt="">
    <?php endif; ?>
    <div style="display:flex;flex-direction:column;padding-left:1rem;">
        <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if($jobTitle): ?>
            <h4><?php echo $jobTitle; ?></h4>
        <?php endif; ?>

        <?php if($phoneNumber): ?>
            <div><?php echo $phoneNumber; ?></div>
        <?php endif; ?>

        <?php if($link): ?>
            <div><?php echo $link["title"]; ?></div>
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
