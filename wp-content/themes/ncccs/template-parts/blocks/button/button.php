<?php
$blockName = "button";
$bg_color = get_field('background');
$spacing = get_field('component_spacing');
$link = get_field('button_link');
$alignment = get_field('button_alignment');
$button_type = get_field('button_type');
?>



<div class="<?php echo $bg_color; ?>  element-<?php echo $blockName; ?> <?php echo $alignment; ?>" data-spacing-bottom=<?php if ($spacing)
                echo $spacing['bottom_spacing'] ?> data-spacing-top=<?php if ($spacing)
                echo $spacing['top_spacing'] ?>


      >
    <?php if ($link): ?>
          <a class="buttonElement <?php echo $button_type; ?>" href="<?php echo $link['url']; ?>">
              <?php echo $link['title']; ?>
          </a>
    <?php endif; ?>
</div>

<style>

    .element-button{
        width:100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }


    a.buttonElement{
      text-decoration: none;
      width: fit-content;
      background: var(--navy);
      color: var(--White, #FFF);
      border-radius: 8px;
    }

    .buttonElement.primary{
      padding: 16px 24px;
      justify-content: center;
      align-items: center;
      gap: 10px;
      font-size: 20px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%;
      color:white;
      letter-spacing: 0.6px;
      text-transform: uppercase;
    }

    .buttonElement.secondary{
      padding: 12px 20px;
      justify-content: center;
      align-items: center;
      gap: 6px;
      color: var(--White, #FFF);
      text-align: center;
      font-size: 16px;
      font-style: normal;
      font-weight: 700;
      line-height: 100%;
      letter-spacing: -0.16px;
      text-transform: capitalize;
    }

   div.grey{
    background: var(--grey);
   }

   div.white {
    background: #fff;
   }

    .start {
      justify-content: flex-start;
    }

    .center {
      justify-content: center;
    }

    .end {
      justify-content: flex-end;
    }

    [data-spacing-bottom='none']{
        padding-bottom:0;
    }

    [data-spacing-top='none']{
        padding-top:0;
    }

    [data-spacing-bottom='medium']{
        padding-bottom:40px;
    }

    [data-spacing-top='medium']{
        padding-top:40px;
    }

    [data-spacing-bottom='large']{
        padding-bottom:80px;
    }

    [data-spacing-top='large']{
        padding-top:80px;
    }
</style>
