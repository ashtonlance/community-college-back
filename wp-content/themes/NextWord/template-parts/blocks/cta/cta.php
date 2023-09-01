<?php
    $blockName = "cta-banner";
    $heading = get_field('cta_copy');
    $ctabtn = get_field('button');
    $spacing = get_field('component_spacing');

?>

<div class=<?php echo $blockName; ?> data-spacing-bottom=<?php if ($spacing)
    echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
    echo $spacing['top_spacing'] ?> >
    <h2><?php echo $heading; ?><h2>
    <?php if($ctabtn): ?>
        <button href="<?php echo $ctabtn['link']; ?>">
            <?php echo $ctabtn['label']; ?>
        </button>
    <?php endif; ?>
</div>

<style>
    .<?php echo $blockName; ?>{
        display: flex;
        justify-content: space-around;
        align-items: baseline;
        height:200px;
        background-color:black;
        padding:40px;
    }

    .<?php echo $blockName; ?> h2{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 46px;
        line-height: 115%;
        letter-spacing: -0.02em;
        color: #FFFFFF;
    }

    .<?php echo $blockName; ?> button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 18px 24px;
        gap: 12px;
        width: 180px;
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
