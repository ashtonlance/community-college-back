<?php
$blockName = "team-member-cards";
$cards = get_field('team_member');
$title = get_field('title');
$bg_color = get_field('background_color');
?>
<div class=<?php echo $blockName . $bg_color; ?>>
    <?php if ($title): ?>
        <h2> <?php echo $title ?></h2>
    <?php endif; ?>
    <?php if (is_array($cards)): ?>
            <?php foreach ($cards as $card) { ?>
                    <div class="card-member">
                        <?php if ($card['photo']): ?>
                                <img class="image" src=<?php echo $card['photo']; ?> />
                        <?php endif; ?>
                        <div class="content">
                            <div class="row">
                                <?php if ($card['name']): ?>
                                        <h3><?php echo $card['name']; ?></h3>
                                <?php endif; ?>
                                <?php if ($card['linkedin_link']): ?>
                                        <a href=<?php echo $card['linkedin_link']; ?>>LinkedIn</a>
                                <?php endif; ?>
                            </div>
                            <?php if ($card['job_title']): ?>
                                    <p class="job-title"><?php echo $card['job_title']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php } ?>
    <?php endif; ?>
</div>

<style>

.<?php echo $blockName . $bg_color; ?>{
    display:flex;
    flex-direction:row;
    height: fit-content;
    gap:20px;
    flex-wrap:wrap;
    max-width: 1100px;
}

.team-member-cardswhite{
    background-color: #FFF;
}

.team-member-cardslight{
    background-color: #F8F8F8;
}

.team-member-cardsdark{
    background-color: #CCCCCC;
}

.team-member-cardswhite .card-member{
    background-color: #F8F8F8;
}

.team-member-cardslight .card-member{
    background-color: #FFF;
}

.team-member-cardsdark .card-member{
    background-color: #F8F8F8;
}

.<?php echo $blockName . $bg_color; ?> h2{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 46px;
    line-height: 115%;
    letter-spacing: -0.02em;
    color: #000000;
    width: 100%;
}

.<?php echo $blockName . $bg_color; ?> .image{
    width: 330px;
}

.<?php echo $blockName . $bg_color; ?> .content{
    display:flex;
    flex-direction:column;
    padding:20px;
    background: transparent;
    margin-top:-10px;
}

.<?php echo $blockName . $bg_color; ?> .row{
    display:flex;
    justify-content: flex-start;
    align-items: center;
    gap: 15px;
}

.<?php echo $blockName . $bg_color; ?> h3{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 26px;
    line-height: 120%;
    letter-spacing: -0.01em;
    color: #000000;
    margin:0;
}

.<?php echo $blockName . $bg_color; ?> p{
    font-family: "proxima-nova", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 160%;
    color: #888888;
    margin-bottom:0;
}
</style>
