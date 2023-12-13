<div class="gamespot-container">

    
    <?php 
        $json = file_get_contents('../../data-php/game-stop-cards.json');
        $cards = json_decode($json, true);

        foreach ($cards as $card) { ?>
            
            <article class="<?= $card['card-class'] ?>">

            <div>
                <picture>
                    <img src="../../assets/<?= $card['img'] ?>" alt="">
                </picture>
            </div>
                

                <div class="<?= $card['text-class'] ?>">
                    <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                </div>
        </article>
            
    <?php } ?>
</div>