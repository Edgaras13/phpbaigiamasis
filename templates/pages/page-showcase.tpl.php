<div class="showcase">
    <form class="form" action="http://phpishard.lt/?page=showcase" method="POST">
        Type "start": <input name="start" type="text"/>
        <input type="submit" value="start"/>
    </form>
    <div class="hands">
        <?php if (start()): ?>
            <div>
                <div>Player's hand: <br></div>
                <?php foreach ($page['content']['player_hand'] as $key => $value): ?>
                    <div><?php print $value;?></div>
                    <div id="cards" class="<?php print $page['content']['player_class'][$key]; ?>"></div>
                <?php endforeach; ?>
                    <div id="score"><br> Score: <?php print $page['content']['player_score']; ?></div>
            </div>
            <div>
                <div>Dealer's hand:</div>
                <?php foreach ($page['content']['dealer_hand'] as $key => $value): ?>
                    <div><?php print $value; ?></div>
                    <div id="cards" class="<?php print $page['content']['dealer_class'][$key]; ?>"></div>
                <?php endforeach; ?>
                    <div id="score"><br> Score: <?php print $page['content']['dealer_score']; ?></div>
            </div>
    </div>
    <div class="win"><?php print $page['content']['result']; ?></div>
    <?php endif; ?>
</div>