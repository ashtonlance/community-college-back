<?php
$blockName = "download-resource";
$title = get_field('form_title');
$form = get_field('download_form');
$link = get_field('link_to_resource_asset');
?>

<div class='<?php echo $blockName; ?>'>
    <?php if ($title): ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <div class="row">
        <input type="text" placeholder="Email Address" />
        <input type="text" placeholder="Job Title" />
    </div>
    <?php if ($form): ?>
        <div class="row">
            <button> Download </button>
            <small> By submitting this form, you agree to receive emails, promotions, and general messages from GMT.
        You also agree to our Privacy Policy. </small>
        <div>
    <?php endif; ?>
</div>


<style>
    .<?php echo $blockName; ?> {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 60px;
        background: #555555;
        margin: 20px;
    }

    .<?php echo $blockName; ?> .row{
        display: flex;
        flex-direction: row;
        justify-content:center;
        align-items: center;
        gap: 24px;
        width: 100%;
        margin-bottom: 20px;
    }

    .<?php echo $blockName; ?> input{
        background-color: transparent;
        width: 100%;
    }

    .<?php echo $blockName; ?> h4{
        font-family: "proxima-nova", sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 34px;
        line-height: 120%;
        text-align: center;
        letter-spacing: -0.01em;
        color: #FFFFFF;
        margin:20px;
    }

    .<?php echo $blockName; ?> button{
        background: black;
        color:white;
        font-weight: 700;
        padding:20px;
        padding: 18px 24px;
        gap: 12px;
        width: 164px;
        border:none;
        border-radius: 3px;
    }
    .<?php echo $blockName; ?> small{
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 140%;
        color: #CCCCCC;
    }
</style>
